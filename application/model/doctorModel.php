<?php

class doctorModel extends Model{

    function __construct(){
        parent::__construct();
    }
    
    function getData(){
        $sql = "SELECT * FROM user INNER JOIN doctor ON user.user_id = doctor.user_id  INNER JOIN specialization ON specialization.doctor_id = doctor.doctor_id  LEFT JOIN article ON article.doctor_id = doctor.doctor_id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }    
}
