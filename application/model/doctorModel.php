<?php

class doctorModel extends Model{

    function __construct(){
        parent::__construct();
    }
    
    function getData(){
        $query = "SELECT * FROM user INNER JOIN doctor ON user.user_id = doctor.user_id  INNER JOIN specialization ON specialization.doctor_id = doctor.doctor_id";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    } 
    function getDoctor($patientId){
        $query = "SELECT * FROM user INNER JOIN doctor ON user.user_id = doctor.user_id INNER JOIN doctor_patient ON doctor_patient.doctor_id = doctor.doctor_id INNER JOIN specialization ON specialization.doctor_id = doctor.doctor_id WHERE patient_id = '$patientId'";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }    
}
