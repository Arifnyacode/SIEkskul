<?php

class User extends Controller
{
    public function index()
    {
        $data['users']=$this->model('M_User')->getAlldata();
        $this->view('templating/header');
        $this->view('templating/sidebar');
        $this->view('user/index',$data);
        $this->view('templating/footer');
    }
}
