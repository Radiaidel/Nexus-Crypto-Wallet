<?php
class Transaction
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }
    public function insertTransaction($userIDSender, $userIDRecipient, $cryptoID, $type, $quantity, $transactionDate)
    {
        $this->db->query('INSERT INTO transactions (UserIDSender, UserIDRecipient, CryptoID, Type, Quantity, TransactionDate)
                          VALUES (:userIDSender, :userIDRecipient, :cryptoID, :type, :quantity, :transactionDate)');

        $this->db->bind(':userIDSender', $userIDSender);
        $this->db->bind(':userIDRecipient', $userIDRecipient);
        $this->db->bind(':cryptoID', $cryptoID);
        $this->db->bind(':type', $type);
        $this->db->bind(':quantity', $quantity);
        $this->db->bind(':transactionDate', $transactionDate);

        return $this->db->execute();
    }
}