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
    public function dashboard()
    {
        $data = [
            'title' => 'dashboard',
            'description' => ''
        ];
        $this->view('pages/dashboard', $data);
    }
    public function transfer()
    {
        $data = [
            'title' => 'transfer',
            'description' => ''
        ];
        $this->view('pages/transfer', $data);
    }
}
