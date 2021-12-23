<?php

class loginModel extends Model{

    function __construct()
    {
        parent::__construct();
    }

    function checkAccount($username,$password){
        //Sanitize data
        //$username = $this->db->quote($username);
        //Password hasing
        //$password = md5($password);

        $sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password' LIMIT 1";
        return $this->db->runQuery($sql);

    }    
    
}