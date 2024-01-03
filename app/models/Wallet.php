<?php
class Wallet
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }
}