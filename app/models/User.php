<?php
class User
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }
    public function findUserbyEmail($email)
    {
        $this->db->query('SELECT * FROM users WHERE user_email=:email');
        $this->db->bind(':email', $email);
        $row = $this->db->single();
        if ($this->db->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }
    public function register($data)
    {
        $this->db->query('INSERT INTO users(user_fullname,user_email,user_pass) VALUES(:name , :email , :pass)');
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':email', $data['email']);
        $this->db->bind(':pass', $data['pass']);
        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    public function login($data)
    {
        $this->db->query('SELECT * FROM users WHERE user_email = :email ');
        $this->db->bind(':email', $data['email']);

        $row = $this->db->single();
        $hashedpass = $row['user_pass'];
        if (password_verify($data['pass'], $hashedpass)) {
            return $row;
        } else {
            echo false;
        }
    }
    public function search($title)
    {
        $this->db->query('SELECT * FROM tasks WHERE task_name = :title OR task_name LIKE :title');
        $this->db->bind(':title', $title);
        $row = $this->db->single();
        return $row;
    }
    public function totalpro($userid)
    {
        $this->db->query('SELECT COUNT(*) FROM projects WHERE project_owner = :owner ');
        $this->db->bind(':owner', $userid);
        $row = $this->db->single();
        return $row;
    }
    public function totaltasks($userid)
    {
        $this->db->query('SELECT COUNT(*) FROM tasks WHERE user = :owner ');
        $this->db->bind(':owner', $userid);
        $row = $this->db->single();
        return $row;
    }
    public function total_act_tasks($userid)
    {
        $this->db->query('SELECT COUNT(*) FROM tasks WHERE user = :owner AND task_status <> "Done" ');
        $this->db->bind(':owner', $userid);
        $row = $this->db->single();
        return $row;
    }
    public function total_done_task($userid)
    {
        $this->db->query('SELECT COUNT(*) FROM tasks WHERE user = :owner AND task_status = "Done" ');
        $this->db->bind(':owner', $userid);
        $row = $this->db->single();
        return $row;
    }
}
