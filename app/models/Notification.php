<?php
class Notification
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }
}