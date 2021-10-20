<?php

class bookModel extends Model{
    function __construct(){
        parent::__construct();
    }

    function getBookDetails($patientID){
        $query = "SELECT * FROM booking INNER JOIN booking_test_type ON booking.booking_id = booking_test_type.booking_id INNER JOIN test ON test.test_id = booking_test_type.test_id WHERE patient_id = '$patientID' LIMIT 1";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function bookCount($patientId){
        $query = "SELECT * FROM booking WHERE patient_id = '$patientId '";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $count = $stmt->rowCount();
    }

    function bookInsert($patientId, $date){
        $query = "INSERT INTO booking (patient_id, created_date)  VALUES ('$patientId','$date');";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $this->db->lastInsertId();
    }

    function testInsert($testID, $bookingID){
        $query = "INSERT INTO booking_test_type (booking_id, test_id)  VALUES ('$bookingID','$testID');";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        //bind
    }

    function bookCancel($id){
        $query = "DELETE FROM booking WHERE booking_id = '$id'";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
    }
}
        