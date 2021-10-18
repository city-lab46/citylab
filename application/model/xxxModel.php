<?php

class xxxModel extends Model{

    function __construct()
    {
        parent::__construct();
    }

    function print(){
        echo "xxxModel print()";
    }
    
    function getData(){
        return $this->db->runQuery("SELECT * from users");
    }    
    
}