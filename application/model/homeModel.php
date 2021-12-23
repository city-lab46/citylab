<?php

class homeModel extends Model{

    function __construct(){
        parent::__construct();
    }
    
    function getArticle(){
        $query = "SELECT * FROM user INNER JOIN doctor ON user.user_id = doctor.user_id INNER JOIN article ON article.doctor_id = doctor.doctor_id ORDER BY article_id DESC";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }    

    function getBookDetails($patientID){
        $query = "SELECT * FROM booking INNER JOIN booking_test_type ON booking.booking_id = booking_test_type.booking_id INNER JOIN test ON test.test_id = booking_test_type.test_id WHERE patient_id = '$patientID' LIMIT 1";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
