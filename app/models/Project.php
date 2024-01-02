<?php
class Project
{
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function addpro($data)
    {
        $this->db->query('INSERT INTO projects(project_name,project_desc,project_deadline,project_owner) VALUES(:name,:pro_desc ,:deadline,:owner)');

        $this->db->bind(':name', $data['name']);
        $this->db->bind(':pro_desc', $data['desc']);
        $this->db->bind(':deadline', $data['dead']);
        $this->db->bind(':owner', $data['userid']);
        $this->db->execute();
    }
    public function display($ownerid)
    {
        $data['owner'] = $ownerid;
        $this->db->query('SELECT * FROM projects WHERE project_owner = :owner');
        $this->db->bind(':owner', $data['owner']);
        $row = $this->db->resultSet();
        return $row;
    }
    public function displaypro($data)
    {
        $this->db->query('SELECT * FROM projects WHERE project_owner = :owner');
        $this->db->bind(':owner', $data['userid']);
        $row = $this->db->resultSet();
        return $row;
    }
    public function delete($proid)
    {

        $this->db->query('DELETE FROM projects WHERE project_id = :id');
        $this->db->bind(':id', $proid);
        $this->db->execute();
    }
    public function update($data)
    {

        $this->db->query('UPDATE projects 
        SET project_name = :name, project_desc = :desc, project_deadline = :dead 
        WHERE project_id = :id;
        ');
        $this->db->bind(':name', $data['name']);
        $this->db->bind(':desc', $data['description']);
        $this->db->bind(':dead', $data['deadline']);
        $this->db->bind(':id', $data['proid']);
        $this->db->execute();
    }
}
