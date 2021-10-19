<?php

class settingsModel extends Model{

    function __construct()
    {
        parent::__construct();
    }
    
    function getData($patientId){
        $query = "SELECT * from user WHERE user_id ='$patientId'";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetch();
    }    
}