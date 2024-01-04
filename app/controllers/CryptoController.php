<?php
class CryptoController extends Controller
{
    private $Crypto;
    public function __construct()
    {
        $this->Crypto = $this->model('Crypto');
    }
}