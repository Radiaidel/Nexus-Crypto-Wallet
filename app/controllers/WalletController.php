<?php
class WalletController extends Controller
{
    private $Wallet;
    public function __construct()
    {
        $this->Wallet = $this->model('Wallet');
    }
}