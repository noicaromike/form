<?php

class UsersController extends Controller
{
    private $userModel;
    public function __construct()
    {
        $this->userModel = $this->model('User');
    }



    public function dashboard()
    {

        $data = [

            'title' => 'this is home',
        ];
        $this->view('users/dashboard', $data);
    }
    public function settings()
    {

        $data = [

            'title' => 'this is home',
        ];
        $this->view('users/settings', $data);
    }
    public function create()
    {
        $data = [

            'title' => 'this is home',
        ];
        $this->view('users/create', $data);
    }
}
