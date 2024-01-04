<?php
class TransactionController extends Controller
{
    private $Transaction;
    private $User;
    private $Wallet;

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
                session_start();
                $_SESSION["UserIDRecipient"] = $resultat['UserID'];
                $_SESSION["ValidNexusID"] = true; // Flag indicating a valid NexusID

                // Redirect to the transfer page
                header('Location: ' . URLROOT . 'TransactionController/transferPage');
                exit();
            } else {
                var_dump($resultat);
                die("utilisateur non trouvé");
            }
        }
    }
    public function transferPage()
    {
        session_start();

        $validNexusID = isset($_SESSION["ValidNexusID"]) && $_SESSION["ValidNexusID"];
        if ($validNexusID):


            $wallet = $this->model('Wallet');


            $cryptoData = $wallet->getCryptoDataForUser(2);


            echo ' <script>
                // Add JavaScript code to show the modal here
                document.addEventListener("DOMContentLoaded", function () {
                    var otherInfoModal = document.getElementById("otherInfoModal");
                    
                    otherInfoModal.classList.remove("hidden");
                });
                </script>';

            if (isset($cryptoData)) {
                $this->view('pages/transfer', ['cryptoData' => $cryptoData, 'validNexusID' => $validNexusID]);
            } else {
                die("Erreur lors de la récupération des données de crypto-monnaie pour l'utilisateur.");
            }
        endif;


    }
    public function sendCryptocurrency()
    {
        session_start();

    
        if (isset($_POST['transferBtn'])) {
            $userIDSender = 2; // Remplacez par le véritable ID de l'utilisateur émetteur
            $userIDRecipient = $_SESSION['UserIDRecipient'];
            $cryptoID = $_POST['cryptoType']; // Assurez-vous que 'cryptoType' est correctement défini dans le formulaire
            $type = 'Transfert'; // ou toute autre valeur de type nécessaire
            $quantity = $_POST['quantity']; // Assurez-vous que 'quantity' est correctement défini dans le formulaire
            $transactionDate = date('Y-m-d H:i:s'); // ou toute autre méthode appropriée pour obtenir la date actuelle

            $this->Wallet = $this->model('Wallet');
            $resultAdd =$this->Wallet->CryptoToRecipientWallet($userIDRecipient, $cryptoID, $quantity);
            
            $resultRemove = $this->Wallet->removeCryptoFromWallet($userIDSender, $cryptoID, $quantity);
            if ($resultAdd && $resultRemove ) {
                 $this->Transaction->insertTransaction($userIDSender, $userIDRecipient, $cryptoID, $type, $quantity, $transactionDate);

                echo 'La transaction a été enregistrée avec succès dans la base de données.';
            } else {
                echo 'Erreur lors de l\'enregistrement de la transaction dans la base de données.';
            }
        } else {
            echo 'Confirmation non reçue.';
        }

        exit();
    }
}