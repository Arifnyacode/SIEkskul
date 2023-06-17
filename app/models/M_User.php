<?php

class M_User{
    private $table = "users";
    private $db;

    public function __construct(){
        $this->db = New Database;
    }

    public function getAlldata()
    {
        $this->db->query('SELECT * FROM users');
        return $this->db->resultSet();
    }

    public function insertUser($data){
        $query = "INSERT INTO users values ('',:password,:no_induk,:nama,:jk,:tpt_lahir,:tgl_lahir,:alamat,:email,:nohp,:lvl)";
		$this->db->query($query);
        $this->db->bind('password',$data['password']);
		$this->db->bind('no_induk',$data['nominduk']);
		$this->db->bind('nama',$data['namauser']);
		$this->db->bind('jk',$data['JK']);
		$this->db->bind('tpt_lahir',$data['tptlahir']);
        $this->db->bind('tgl_lahir',$data['tgl_lahir']);
        $this->db->bind('alamat',$data['alamat']);
        $this->db->bind('email',$data['email']);
        $this->db->bind('nohp',$data['nohp']);
        $this->db->bind('lvl',$data['level']);

		$this->db->execute();

		return $this->db->rowCount();
    }

    public function deleteUser($id){
        $this->db->query('DELETE FROM '.$this->table.' WHERE IdUser=:id');
        $this->db->bind('id',$id);
        $this->db->execute();
        return $this->db->rowCount();
    }

    

}