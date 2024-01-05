<?php
class Crypto
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }
    public function getCryptoNameByID($cryptoID) {
        $this->db->query('SELECT Name FROM crypto WHERE CryptoID = :cryptoID');
        $this->db->bind(':cryptoID', $cryptoID);
        $row = $this->db->single();
        return $row['Name'];
    }
}