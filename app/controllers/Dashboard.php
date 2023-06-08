<?php

class Dashboard extends Controller{
    public function index()
    {
        $this->view('templating/header');
        $this->view('templating/sidebar');
        $this->view('dashboard/index');
        $this->view('templating/footer');
    }

}