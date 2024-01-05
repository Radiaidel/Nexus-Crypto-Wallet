<?php
class Crypto
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }
}