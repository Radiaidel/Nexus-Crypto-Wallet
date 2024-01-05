<?php

class Notification
{
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    // Fetch notifications from the database
    public function getNotifications() 
    {
        $this->db->query("SELECT NotificationID, UserID, Message, NotificationDate, Seen FROM notifications where user_id = :user_id ORDER BY NotificationDate DESC");
        $this->db->bind(":user_id",$_SESSION['id']);
        $data = $this->db->resultSet();
        return $data;
    }
}

?>