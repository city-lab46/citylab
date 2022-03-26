<?php

class billModel extends Model{
    function __construct(){
        parent::__construct();
    }
    function getPatientBookingDetails($offset, $no_of_records_per_page){
        $query = "SELECT booking.patient_id, booking.booking_date, user.first_name, user.last_name , test.name, booking.booking_time FROM booking, patient, user, test, booking_test_type WHERE patient.user_id = user.user_id AND booking.patient_id = patient.patient_id
         AND  booking.booking_id = booking_test_type.booking_id AND test.test_id = booking_test_type.test_id AND booking.booking_date >= CURRENT_DATE() AND booking_test_type.status= 'booked' ORDER BY  booking.booking_date ASC, booking.booking_time ASC LIMIT $offset, $no_of_records_per_page";
        
        $stmt = $this->db->prepare($query);
        $stmt->execute();   
        return $stmt->fetchAll();
    }
    function searchBooking($search){
        $query = "SELECT booking.patient_id, booking.booking_date, user.first_name, user.last_name , test.name, booking.booking_time FROM booking, patient, user, test, booking_test_type WHERE patient.user_id = user.user_id AND booking.patient_id = patient.patient_id
        AND  booking.booking_id = booking_test_type.booking_id AND test.test_id = booking_test_type.test_id AND booking.booking_date >= CURRENT_DATE() AND booking_test_type.status= 'booked' AND
        (booking.patient_id LIKE '%".$search."%' 
        OR booking.booking_date LIKE '%".$search."%' 
        OR user.first_name LIKE '%".$search."%' 
        OR user.last_name LIKE '%".$search."%' 
        OR test.name LIKE '%".$search."%'
        OR booking.booking_time LIKE '%".$search."%' ) ORDER BY  booking.booking_date DESC, booking.booking_time DESC";
       
        $stmt = $this->db->prepare($query);
        $stmt->execute();   
        return $stmt->fetchAll();
    }
    function getBookingId($patient_id, $booking_date,  $booking_time){
        $query = "SELECT booking_id FROM booking WHERE booking_date= '$booking_date' AND booking_time= '$booking_time' AND  patient_id= '$patient_id'";
        $stmt = $this->db->prepare($query);
        $stmt->execute();   
        return $stmt->fetchAll();
    }
    function getTestTypes($booking_id){
        $query = "SELECT test_id FROM booking_test_type WHERE booking_id = $booking_id AND status='booked'";
        $stmt = $this->db->prepare($query);
        $stmt->execute();   
        return $stmt->fetchAll();
    }
    function getTestCost($test_id){
        $query = "SELECT cost FROM test WHERE test_id = $test_id ";
        $stmt = $this->db->prepare($query);
        $stmt->execute();   
        return $stmt->fetchAll();
    }
    function billInsert($total_amount,$booking_id ){
        $query = "INSERT INTO bill (total_payment,booking_id )  VALUES ('$total_amount','$booking_id' );";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $this->db->lastInsertId();
    }
    function getBillId($booking_id){
        $query = "SELECT bill_id FROM bill WHERE booking_id = $booking_id";
        $stmt = $this->db->prepare($query);
        $stmt->execute();   
        return $stmt->fetchAll(); 
    }
    function getBillDetails($bill_id, $patient_id){
        $query = "SELECT bill.bill_id,bill.created_date,bill.total_payment, user.first_name  FROM bill, user WHERE bill.bill_id = $bill_id  AND user.user_id = (SELECT user_id FROM patient WHERE patient_id = '$patient_id')";
        $stmt = $this->db->prepare($query);
        $stmt->execute();   
        return $stmt->fetchAll();
    }
    function getTestNameAndCost($test_id){
        $query = "SELECT name, cost FROM test  WHERE test_id = $test_id ";
        $stmt = $this->db->prepare($query);
        $stmt->execute();   
        return $stmt->fetchAll(); 
    }
    function getPatientBillDetails($offset, $no_of_records_per_page){
        $query = "SELECT bill.bill_id, bill.total_payment,bill.created_date, user.first_name, user.last_name FROM bill, user, patient, booking,booking_test_type WHERE patient.user_id = user.user_id AND booking.patient_id = patient.patient_id
        AND  booking.booking_id = bill.booking_id AND booking_test_type.status= 'booked' LIMIT $offset, $no_of_records_per_page" ;
        $stmt = $this->db->prepare($query);
        $stmt->execute();   
        return $stmt->fetchAll(); 
    }
    function searchBill($search){
        $query = "SELECT bill.bill_id, bill.total_payment,bill.created_date, user.first_name, user.last_name, booking_test_type FROM bill, user, patient, booking WHERE patient.user_id = user.user_id AND booking.patient_id = patient.patient_id
        AND  booking.booking_id = bill.booking_id AND  booking_test_type.status= 'booked' AND
        (bill.bill_id LIKE '%".$search."%' 
        OR bill.total_payment LIKE '%".$search."%' 
        OR bill.created_date LIKE '%".$search."%' 
        OR user.first_name LIKE '%".$search."%'
        OR user.last_name LIKE '%".$search."%' 
        )";
        $stmt = $this->db->prepare($query);
        $stmt->execute();   
        return $stmt->fetchAll(); 
    }
    function getCount(){
        $query = "SELECT booking.patient_id, booking.booking_date, user.first_name, user.last_name , test.name, booking.booking_time FROM booking, patient, user, test, booking_test_type WHERE patient.user_id = user.user_id AND booking.patient_id = patient.patient_id
         AND  booking.booking_id = booking_test_type.booking_id AND test.test_id = booking_test_type.test_id AND booking.booking_date >= CURRENT_DATE() AND booking_test_type.status= 'booked'  ORDER BY  booking.booking_date ASC, booking.booking_time ASC";
        
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $count = $stmt->rowCount();
    }
    function getData($offset, $no_of_records_per_page){
        
        $query = "SELECT booking.patient_id, booking.booking_date, user.first_name, user.last_name , test.name, booking.booking_time FROM booking, patient, user, test, booking_test_type WHERE patient.user_id = user.user_id AND booking.patient_id = patient.patient_id
         AND  booking.booking_id = booking_test_type.booking_id AND test.test_id = booking_test_type.test_id AND booking.booking_date >= CURRENT_DATE() AND booking_test_type.status= 'booked'  ORDER BY  booking.booking_date ASC, booking.booking_time ASC LIMIT $offset, $no_of_records_per_page";
        
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    function getCountOfBill(){
        $query = "SELECT * FROM bill ";
        $stmt = $this->db->prepare($query);
        $stmt->execute();   
        return $count = $stmt->rowCount();
    }
    function getDataOfBill($offset, $no_of_records_per_page){
        $query = "SELECT * FROM bill LIMIT 3";
        $stmt = $this->db->prepare($query);
        $stmt->execute();   
        return $stmt->fetchAll();
    }


}