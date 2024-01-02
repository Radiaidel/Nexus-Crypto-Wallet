<?php
class Tasks extends Controller
{
    private $taskModel;
    private $projectModel;
    public function __construct()
    {
        $this->taskModel = $this->model('Task');
        $this->projectModel = $this->model('Project');
    }
   
    public function displaytask(){
        $proid = 0;
        if(isset($_GET['proid'])){
            $proid = (int)$_GET['proid'];
        }
        $row = $this->taskModel->display($proid);
        $this->view("pages/task" , $row);   
        return $row ;
    }
    public function addtask(){
        $data = [];
        if(isset($_POST['name']) && isset($_POST['desc']) && isset($_POST['dead']) && isset($_POST['userid']) && isset($_POST['proid'])){
            $data['name'] = $_POST['name'];
            $data['desc'] = $_POST['desc'];
            $data['dead'] = $_POST['dead'];
            $data['userid'] = $_POST['userid'];
            $data['proid'] = $_POST['proid'];
        }
        $this->taskModel->addtask($data);
        $data = [];        
    }
    public function deletetask(){
        $id=0;
        if(isset($_GET['id'])){
            $id = $_GET['id'];
        }
        $this->taskModel->deletetask($id);
        $this->displaytask();
    }
    public function updatetask(){
        $data = [];
        if(isset($_POST['name']) && isset($_POST['desc']) && isset($_POST['dead']) && isset($_POST['taskid']) && isset($_POST['status']) ){
            $data['name'] = $_POST['name'];
            $data['desc'] = $_POST['desc'];
            $data['dead'] = $_POST['dead'];
            $data['taskid'] = $_POST['taskid'];
            $data['status']=$_POST['status'];
        }
        $this->taskModel->updatetask($data);
        $data = []; 
    }
    public function dash(){
        $data = [];
        if(isset($_POST['userid'])){
            $data['userid'] = (int)$_POST['userid'];
        }
        $_SESSION['id']= $data['userid'];
        die(var_dump($_SESSION['id']));
        $this->view('pages/dash');
    }
}

