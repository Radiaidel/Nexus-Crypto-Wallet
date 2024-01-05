<?php
class WatchList
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }
    public function getWatchlistData()
    {
        
        $query = "SELECT * FROM watchlist_elements where WatchlistID = :watchlistid";
        $this->db->query($query);

        $this->db->bind(':watchlistid',$_SESSION['id']);
        $row = $this->db->resultSet();

        return $row;
    }
}