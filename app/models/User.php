<?php

class User
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    public function findUserByNexusId($nexusId)
    {
        $this->db->query('SELECT UserID FROM users WHERE NexusID = :nexusId');
        $this->db->bind(':nexusId', $nexusId);
        return $this->db->single();
    }
}
