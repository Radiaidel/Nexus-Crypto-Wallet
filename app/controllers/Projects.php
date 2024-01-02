<?php
class Projects extends Controller
{
    private $projectModel;
    public function __construct()
    {
        $this->projectModel = $this->model('Project');
    }
    public function index(){
    $data = [];
        $this->view('pages/dash',$data);
    }
    public function addpro()
    {
        $data = [];
        if(isset($_POST['name']) && isset($_POST['desc']) && isset($_POST['dead']) && isset($_POST['userid'])){
            $data = [
                'name' => $_POST['name'],
                'desc' => $_POST['desc'],
                'dead' => $_POST['dead'],
                'userid' => $_POST['userid']
            ];
            $this->projectModel->addpro($data);
            $data = [];
        }
    }
    public function displaypro(){
        $ownerid = 0;
        
        if(isset($_GET['ownerid'])){
            $ownerid = (int)$_GET['ownerid'];
        }   
        $row = $this->projectModel->display($ownerid);
        echo json_encode($row); 
        // $this->index();
    }
    public function deletepro(){
        $proid = 0;
        if(isset($_GET['proid'])){
            $proid = (int)$_GET['proid'];
        }   
        $data['owner']=$_GET['ownerid'];
        $this->projectModel->delete($proid);
        $_SESSION['id']=$data['owner'];
        $this->index();
    }
    public function editpro(){
        $data= [
            'name'=>$_POST['name'],
            'proid'=>$_POST['proid'],
            'description'=>$_POST['desc'],
            'deadline'=>$_POST['deadline'],
            'owner'=>$_POST['userid']    
        ];
        $this->projectModel->update($data);
        $_SESSION['id']=$data['owner'];
        $this->index();
    }
   
   }
