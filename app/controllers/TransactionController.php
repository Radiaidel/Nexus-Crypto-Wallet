<?php
class TransactionController extends Controller
{
    private $Transaction;
    private $User;
    private $Wallet;
    private $Notification;
    private $crypto;


    public function __construct()
    {
        $this->Transaction = $this->model('Transaction');
    }
    public function findNexusID()
    {
        if (isset($_POST['nexusID'])) {
            $nexusID = htmlspecialchars($_POST['nexusID'], ENT_QUOTES, 'UTF-8');
            $this->User = $this->model('User');

            $resultat = $this->User->findUserByNexusId($nexusID);

            if ($resultat) {
                $_SESSION["UserIDRecipient"] = $resultat['UserID'];
                $_SESSION["ValidNexusID"] = true;

                header('Location: ' . URLROOT . '/TransactionController/transferPage');
                exit();
            } else {
                echo '<script>
                    alert("Utilisateur non trouvé.");
                    window.location.href = "' . URLROOT . '/Pages/dash";
                </script>';
            }
        }
    }
    public function transferPage()
    {

        $validNexusID = isset($_SESSION["ValidNexusID"]) && $_SESSION["ValidNexusID"];
        if ($validNexusID):


            $wallet = $this->model('Wallet');


            $cryptoData = $wallet->getCryptoDataForUser($_SESSION['id']);


            echo ' <script>
                // Add JavaScript code to show the modal here
                document.addEventListener("DOMContentLoaded", function () {
                    var otherInfoModal = document.getElementById("otherInfoModal");
                    
                    otherInfoModal.classList.remove("hidden");
                });
                </script>';

            if (isset($cryptoData)) {
                $this->view('pages/dashboard', ['cryptoData' => $cryptoData, 'validNexusID' => $validNexusID]);
            } else {
                echo '<script>
                alert("Erreur lors de la récupération des données de crypto-monnaie pour l\'utilisateur.");
                window.location.href = "' . URLROOT . '/Pages/dash";
            </script>';
            }
        endif;


    }
    public function sendCryptocurrency()
    {


        if (isset($_POST['transferBtn'])) {
            $userIDSender = $_SESSION['id']; // sessiiiiiiiiiiionnnnnnnnn idddddddddddddddd
            $userIDRecipient = $_SESSION['UserIDRecipient'];
            $cryptoID = $_POST['cryptoType'];
            $type = 'Transfert';
            $quantity = $_POST['quantity'];
            $transactionDate = date('Y-m-d H:i:s');

            $this->Wallet = $this->model('Wallet');
            $resultAdd = $this->Wallet->CryptoToRecipientWallet($userIDRecipient, $cryptoID, $quantity);
            $resultRemove = $this->Wallet->removeCryptoFromWallet($userIDSender, $cryptoID, $quantity);
            if ($resultAdd && $resultRemove) {
                $this->Transaction->insertTransaction($userIDSender, $userIDRecipient, $cryptoID, $type, $quantity, $transactionDate);



                $this->crypto = $this->model('Crypto');
                $cryptoName = $this->crypto->getCryptoNameByID($cryptoID);

                $this->Notification = $this->model('Notification');
                $message = "Vous avez reçu un transfert de $quantity $cryptoName.";
                $notificationDate = date('Y-m-d H:i:s');
                $this->Notification->NewNotification($userIDRecipient, $message, $notificationDate);


                echo '<script>
                    alert("La transaction a été enregistrée avec succès dans la base de données.");
                    window.location.href = "' . URLROOT . '/Pages/dash";
                </script>';
            } else {
                echo '<script>
                    alert("Erreur lors de l\'enregistrement de la transaction dans la base de données.");
                    window.location.href = "' . URLROOT . '/Pages/dash";
                </script>';
            }
        } else {
            echo '<script>
                alert("Confirmation non reçue.");
                window.location.href = "' . URLROOT . '/Pages/dash";
            </script>';
        }
        exit();
    }
}