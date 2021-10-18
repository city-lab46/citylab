<?php

class loginModel extends Model{

    function __construct()
    {
        parent::__construct();
    }

    function checkAccount($username,$password){
        $sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password' LIMIT 1";
        return $this->db->runQuery($sql);

    }    
    
}