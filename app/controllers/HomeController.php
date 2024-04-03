<?php

class HomeController extends Controller
{
    private $homeModel;
    public function __construct()
    {
        $this->homeModel = $this->model('Home');
    }



    public function home()
    {

        $data = [

            'title' => 'this is home',
        ];
        $this->view('home', $data);
    }
}
