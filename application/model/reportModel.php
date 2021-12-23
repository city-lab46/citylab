<?php

class reportModel extends Model{
    function __construct(){
        parent::__construct();
    }
    function reportInsert($created_date , $result , $unit , $speci_examined , $test, $doctor_id){
        $query = "INSERT INTO report (created_date,result,unit,speci_examined,test,doctor_id)  VALUES ('$created_date' , '$result' , '$unit', '$speci_examined' , '$test', '$doctor_id');";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $this->db->lastInsertId();
    }
    function reportInsert2($created_date , $result , $unit , $speci_examined , $test){
        $query = "INSERT INTO report (created_date,result,unit,speci_examined,test)  VALUES ('$created_date' , '$result' , '$unit', '$speci_examined' , '$test');";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $this->db->lastInsertId();
    }
    function selectAdmin(){
        $query = "SELECT * FROM user WHERE title = 'Admin'";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    function notificationInsert($message, $title,  $created_time, $sender, $receiver,$creat_date, $status){
        $query = "INSERT INTO notification (message, title,  created_time, sender, receiver,created_date, status)  VALUES ('$message', '$title',  '$created_time', '$sender', '$receiver','$creat_date', '$status');";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $this->db->lastInsertId();
    }
    function selectId(){
        $query = "SELECT report_id FROM report WHERE report_id=(SELECT MAX(report_id) FROM test_report)";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    function getPatientDetails(){
        $query = "SELECT patient_id, first_name, last_name FROM user AS u, patient AS p WHERE u.user_id = p.user_id ";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    function getDoctorDetails(){
        $query = "SELECT doctor_id, first_name, last_name FROM user AS u, doctor AS d WHERE u.user_id = d.user_id ";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    function getOnePatientDetails($patient_id){
        $query = "SELECT patient_id, first_name, last_name FROM patient AS p, user AS u WHERE patient_id = '$patient_id' AND u.user_id = p.user_id"   ;
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    function getOneDoctorDetails($doctor_id){
        $query = "SELECT doctor_id, first_name, last_name FROM doctor AS d, user AS u WHERE doctor_id = '$doctor_id' AND u.user_id = d.user_id"   ;
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    function getreportDetails(){
        $query = "SELECT * FROM report";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    function getOneReportDetails($report_id){
        $query = "SELECT * FROM report WHERE report_id = '$report_id '";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    function reportUpdate($report_id, $created_date , $result , $unit , $speci_examined , $test){
        $query = "UPDATE report SET created_date = '$created_date' ,result = '$result',unit = '$unit' ,speci_examined = '$speci_examined',
           test = '$test' WHERE report_id = '$report_id'";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $this->db->lastInsertId();
    }
    function deleteReportDetails($report_id){
    $query = "DELETE FROM report WHERE report_id ='$report_id'";
     $stmt = $this->db->prepare($query);
     $stmt->execute();
     return $this->db->lastInsertId();
    }
}