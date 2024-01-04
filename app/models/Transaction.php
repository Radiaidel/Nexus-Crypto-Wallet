<?php
class Transaction
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }
}