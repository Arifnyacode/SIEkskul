<?php

class Login extends Controller
{
    private $table = "users";
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    public function index()
    {
        $this->view('login/index');
    }


    public function authentication(){
        
        if ($this->db==null) {
            die("Koneksi ke database gagal: ");
        }
        $username = $_POST['username'];
        $password = $_POST['password'];
        // Query untuk memeriksa username dan password di database
        $this->db->query("SELECT * FROM users WHERE email='$username' AND password='$password'");
        $result=$this->db->single();
        
        if ($result->num_rows > 0) {
            header("Location:http://localhost/SIEkskul/public/dashboard/index.php");
        } else {
            // Jika data tidak ditemukan, user gagal login
            echo "Login gagal!";
        } 
    }
}
