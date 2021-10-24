<?php

class reportModel extends Model{

    function __construct(){
        parent::__construct();
    }

    function reportInsert($created_date , $result , $unit , $speci_examined , $test){
        $query = "INSERT INTO test_report (created_date,result,unit,speci_examined,test)  VALUES ('$created_date' , '$result' , '$unit', '$speci_examined' , '$test');";
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

    function selectId(){
        $query = "SELECT report_id FROM test_report WHERE report_id=(SELECT MAX(report_id) FROM test_report)";
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

    function getreportDetails(){
        $query = "SELECT * FROM report ";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function getOneReportDetails($report_id){
        $query = "SELECT * FROM report WHERE report_id = '$report_id'";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function deleteReportDetails($report_id){
        $query = "DELETE FROM test_report WHERE report_id ='$report_id'";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $this->db->lastInsertId();
    }

    function reportUpdate($report_id, $created_date , $result , $unit , $speci_examined , $test){
        $query = "UPDATE test_report SET created_date = '$created_date' ,result = '$result',unit = '$unit' ,speci_examined = '$speci_examined',
           test = '$test' WHERE report_id = '$report_id'";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $this->db->lastInsertId();
    }

}