<?php

class Wallets extends Controller {
    private $walletModel;

    public function __construct() {
        $this->walletModel = $this->model('Wallet');
    }

   public function getAll(){
    $walletid =0;
    if(isset($_POST['walletid'])){
        $walletid =  $_POST['walletid'];
    }
    $data = $this->walletModel->getall($walletid);
    if($data){  
        echo json_encode($data);
    }
   }
}