<?php
class WatchList
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function addToWatchlist($userID, $cryptoID)
    {
        

        $this->db->query('INSERT INTO watchlist_elements (WatchlistID, CryptoID) VALUES ((SELECT WatchlistID FROM watchlist WHERE UserID = :userID), :cryptoID)');
        $this->db->bind(':userID', $userID);
        $this->db->bind(':cryptoID', $cryptoID);

        return $this->db->execute(); 
    }
    public function getWatchlistData()
    {

        $query = " SELECT c.CryptoID, c.Name, c.Slug
        FROM crypto c
        JOIN watchlist_elements we ON c.CryptoID = we.CryptoID
        JOIN watchlist w ON we.WatchlistID = w.WatchlistID
        JOIN users u ON w.UserID = u.UserID
        WHERE u.UserID = :userID;";
        $this->db->query($query);

        $this->db->bind(':userID', $_SESSION['id']);
        $row = $this->db->resultSet();

        return $row;
    }
}