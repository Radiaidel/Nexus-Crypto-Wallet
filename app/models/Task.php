<?php
class Task
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }
    public function display($proid)
    {
        $data['proid'] = $proid;
        $this->db->query('SELECT * FROM tasks WHERE pro_id = :proid ORDER BY task_deadline ASC;');
        $this->db->bind(':proid', $data['proid']);
        $row = $this->db->resultSet();
        return $row;
    }
    public function addtask($data){
        $this->db->query('INSERT INTO tasks(task_name,task_desc,task_deadline,pro_id,user) VALUES(:name,:desc ,:deadline,:pro, :user)');
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':desc', $data['desc']);
        $this->db->bind(':deadline', $data['dead']);
        $this->db->bind(':pro', $data['proid']);
        $this->db->bind(':user', $data['userid']);
        $this->db->execute();
    }
    public function deletetask($id){
        $this->db->query('DELETE FROM tasks WHERE task_id = :id');
        $this->db->bind(':id', $id);
        $this->db->execute();
    }
    public function updatetask($data){
        $this->db->query('UPDATE tasks SET task_name=:name , task_status =:status , task_desc=:desc , task_deadline = :deadline  WHERE task_id = :id');
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':status', $data['status']);
        $this->db->bind(':desc', $data['desc']);
        $this->db->bind(':deadline', $data['dead']);
        $this->db->bind(':id', $data['taskid']);
        $this->db->execute();
    }
}
