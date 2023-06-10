<?php

class Dashboard extends Controller{
    public function index()
    {
        $data['judul']="Daashboard";
        $this->view('templating/header',$data);
        $this->view('templating/sidebar');
        $this->view('dashboard/index');
        $this->view('templating/footer');
    }

}