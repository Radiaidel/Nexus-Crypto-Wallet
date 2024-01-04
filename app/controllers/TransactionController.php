<?php
class TransactionController extends Controller
{
    private $Transaction;
    private $User;

    public function __construct()
    {
        $this->Transaction = $this->model('Transaction');
    }
    public function findNexusID()
    {
        if(isset( $_POST['nexusID'])){

            $nexusID = htmlspecialchars($_POST['nexusID'], ENT_QUOTES, 'UTF-8');
            $this->User = $this->model('User');
            $resultat=$this->User->findUserByNexusId($nexusID);
            if($resultat){
                $_SESSION["UserIDRecipient"]=$resultat['UserID'];
                $this->view('pages/transfer',null); // Redirect to the transfer page
            }
            else{
                var_dump($resultat);
                die("utilisateur non trouve");
            }
        }

    }
}