<?php

class articleModel extends Model{

    function __construct(){
        parent::__construct();
    }
    
    function getArticleDetails($doctor_id){
        $query = "SELECT * FROM article WHERE doctor_id = '$doctor_id '";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }    
}
