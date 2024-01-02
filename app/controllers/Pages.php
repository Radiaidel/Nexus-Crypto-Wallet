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
}