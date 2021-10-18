<?php

class settingsModel extends Model{

    function __construct()
    {
        parent::__construct();
    }
    
    function getData($patientId){
        return $this->db->runQuery("SELECT * from user WHERE user_id ='$patientId'");
    }    
    
}