<?php

class User extends Controller
{
    public function index()
    {
        $this->view('templating/header');
        $this->view('templating/sidebar');
        $this->view('user/index');
        $this->view('templating/footer');
    }
}
