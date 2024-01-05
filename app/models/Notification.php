<?php
class Notification
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }
    public function NewNotification($userID, $message, $notificationDate) {
        $this->db->query('INSERT INTO notifications (UserID, Message, NotificationDate) VALUES (:userID, :message, :notificationDate)');
        $this->db->bind(':userID', $userID);
        $this->db->bind(':message', $message);
        $this->db->bind(':notificationDate', $notificationDate);
    
        return $this->db->execute();
    }
}