<?php

class User extends Controller
{
    public function index()
    {
        $data['judul']="User";
        $data['users']=$this->model('M_User')->getAlldata();
        $this->view('templating/header',$data);
        $this->view('templating/sidebar');
        $this->view('user/index',$data);
        $this->view('templating/footer');
    }

    public function formcreate(){
        $data['judul']="Form Create";
        $this->view('templating/header',$data);
        $this->view('templating/sidebar');
        $this->view('user/formuser');
        $this->view('templating/footer');
    }
}
