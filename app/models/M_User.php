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

}