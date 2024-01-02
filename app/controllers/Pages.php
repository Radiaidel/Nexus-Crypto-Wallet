<?php
class Pages extends Controller
{
    private $userModel;
    public function __construct()
    {
    }
    public function index()
    {
        $data = [
            'title' => 'index',
            'description' => ''
        ];
        $this->view('pages/index', $data);
    }
    public function dash()
    {
        $data = [
            'title' => '',
            'description' => '' 
        ];
        $this->view('pages/dash', $data);
    }
    public function task()
    {
        $data = [
            'title' => 'task',
            'description' => ''
        ];
        $this->view('pages/task', $data);
    }
}
