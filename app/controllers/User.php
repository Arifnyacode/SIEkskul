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

    public function insert(){
        if($this->model('M_User')->insertUser($_POST)>0){
            Flasher::setflash('Berhasil','ditambahkan!','success');
            header('Location:'.BASEURL.'/User');
            exit;
        }else{
            Flasher::setflash('Gagal','ditambahkan!','error');
            header('Location: '.BASEURL.'/siswa');
            exit;
        }
        
    }

    public function delete($id){
        if($this->model('M_User')->deleteUser($id)>0){
            Flasher::setflash('Berhasil','dihapus','success');
            header('Location:'.BASEURL.'/user');
            exit;
        }else{
            Flasher::setflash('Gagal','dihapus','success');
            header('Location:'.BASEURL.'/user');
            exit;
        }
    }

    public function update(){
        if($this->model('M_User')->updateUser($_POST)>0){
            Flasher::setflash('Berhasil','dihapus','success');
            header('Location:'.BASEURL.'/user');
            exit;
        }else{
            Flasher::setflash('Berhasil','dihapus','success');
            header('Location:'.BASEURL.'/user');
            exit;
        }
    }
}
