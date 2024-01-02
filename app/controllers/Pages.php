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
    public function anotherPage()
    {
        $data = [
            'title' => 'dash',
            'description' => ''
        ];
        $this->view('pages/dash', $data);
    }
}