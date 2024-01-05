<?php

class Wallet
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function getCryptoDataForUser($userID)
    {
        $this->db->query('SELECT c.CryptoID, c.Name, ce.Quantity FROM wallet_elements ce
                          INNER JOIN crypto c ON ce.CryptoID = c.CryptoID
                          WHERE ce.WalletID = (SELECT w.WalletID FROM wallet w WHERE w.UserID = :userID)');
        $this->db->bind(':userID', $userID);
        return $this->db->resultSet();
    }
    public function CryptoToRecipientWallet($userIDRecipient, $cryptoID, $quantity)
    {
        $existingCrypto = $this->getCryptoInWallet($userIDRecipient, $cryptoID);

        if ($existingCrypto) {
            return $this->updateCryptoInWallet($userIDRecipient, $cryptoID, $quantity);
        } else {
            return $this->insertCryptoIntoWallet($userIDRecipient, $cryptoID, $quantity);
        }
    }

    private function getCryptoInWallet($userIDRecipient, $cryptoID)
    {
        // Sélectionnez la cryptomonnaie dans le portefeuille du destinataire
        $sql = "SELECT * FROM wallet_elements
                WHERE WalletID = (SELECT WalletID FROM wallet WHERE UserID = :userIDRecipient)
                AND CryptoID = :cryptoID";

        // Préparez la requête
        $this->db->query($sql);

        // Liaison des valeurs
        $this->db->bind(':userIDRecipient', $userIDRecipient);
        $this->db->bind(':cryptoID', $cryptoID);

        // Exécutez la requête et retournez le résultat
        return $this->db->single();
    }

    private function updateCryptoInWallet($userIDRecipient, $cryptoID, $quantity)
    {
        // Mettez à jour la quantité de cryptomonnaie dans le portefeuille du destinataire
        $sql = "UPDATE wallet_elements SET Quantity = Quantity + :quantity
                WHERE WalletID = (SELECT WalletID FROM wallet WHERE UserID = :userIDRecipient) 
                AND CryptoID = :cryptoID";

        // Préparez la requête
        $this->db->query($sql);

        // Liaison des valeurs
        $this->db->bind(':quantity', $quantity);
        $this->db->bind(':userIDRecipient', $userIDRecipient);
        $this->db->bind(':cryptoID', $cryptoID);

        // Exécutez la requête
        return $this->db->execute();
    }

    private function insertCryptoIntoWallet($userIDRecipient, $cryptoID, $quantity)
    {
        // Insérez la cryptomonnaie dans le portefeuille du destinataire
        $sql = "INSERT INTO wallet_elements (WalletID, CryptoID, Quantity)
                VALUES ((SELECT WalletID FROM wallet WHERE UserID = :userIDRecipient), :cryptoID, :quantity)";

        // Préparez la requête
        $this->db->query($sql);

        // Liaison des valeurs
        $this->db->bind(':userIDRecipient', $userIDRecipient);
        $this->db->bind(':cryptoID', $cryptoID);
        $this->db->bind(':quantity', $quantity);

        // Exécutez la requête
        return $this->db->execute();
    }

    public function removeCryptoFromWallet($userID, $cryptoID, $quantity)
    {
        // Mettez à jour la quantité de cryptomonnaie dans la table des éléments du portefeuille
        $sql = "UPDATE wallet_elements SET Quantity = Quantity - :quantity
                WHERE WalletID = (SELECT WalletID FROM wallet WHERE UserID = :userID) 
                AND CryptoID = :cryptoID";

        // Préparez la requête
        $this->db->query($sql);

        // Liaison des valeurs
        $this->db->bind(':quantity', $quantity);
        $this->db->bind(':userID', $userID);
        $this->db->bind(':cryptoID', $cryptoID);

        // Exécutez la requête
        if ($this->db->execute()) {
            // La mise à jour a réussi
            return true;
        } else {
            // La mise à jour a échoué
            return false;
        }
    }
}
