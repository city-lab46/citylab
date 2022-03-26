<?php

class scheduleModel extends Model{
    function __construct(){
        parent::__construct();
    }
function getPatientDetails($offset, $no_of_records_per_page){
        $query = "SELECT patient.patient_id, user.first_name,user.last_name,user.contact,user.email FROM patient, user WHERE patient.user_id = user.user_id LIMIT $offset, $no_of_records_per_page";
        $stmt = $this->db->prepare($query);
        $stmt->execute();   
        return $stmt->fetchAll();
    }
    function getBookingDetails(){
        $query = "SELECT booking_date, booking_time FROM booking WHERE status= 'booked' ";
        $stmt = $this->db->prepare($query);
        $stmt->execute();   
        return $stmt->fetchAll();
    }
    function getPatientBookingDetails($offset, $no_of_records_per_page){
        $query = "SELECT booking.patient_id, booking.booking_date, user.first_name, user.last_name , test.name, booking.booking_time 
        FROM booking, patient, user, test, booking_test_type WHERE patient.user_id = user.user_id AND booking.patient_id = patient.patient_id
         AND  booking.booking_id = booking_test_type.booking_id AND test.test_id = booking_test_type.test_id AND booking_test_type.status='booked' 
         AND booking.booking_date >= CURRENT_DATE() ORDER BY  booking.booking_date ASC, booking.booking_time ASC LIMIT $offset, $no_of_records_per_page";
        
        $stmt = $this->db->prepare($query);
        $stmt->execute();   
        return $stmt->fetchAll();
    }
    function getOneScheduleDetails($patient_id, $booking_date, $booking_time){
        $query = "SELECT patient_id, booking_date, booking_time FROM booking WHERE patient_id= '$patient_id' AND booking_date= '$booking_date' 
        AND booking_time='$booking_time'";
        $stmt = $this->db->prepare($query);
        $stmt->execute();   
        return $stmt->fetchAll();
    }
    
    function getBookingTimeForSpecificDate($booking_date){
        $query = "SELECT booking_time FROM booking WHERE booking_date= '$booking_date' ";
        $stmt = $this->db->prepare($query);
        $stmt->execute();   
        return $stmt->fetchAll();
    }
    function bookingInsert($patient_id, $booking_date,  $booking_time){
        $query = "INSERT INTO booking (patient_id, booking_date, booking_time, status )  VALUES ('$patient_id', '$booking_date',  '$booking_time','booked');";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $this->db->lastInsertId();
    }
    function getBookingId($patient_id, $booking_date,  $booking_time){
        $query = "SELECT booking_id FROM booking WHERE booking_date= '$booking_date' AND booking_time= '$booking_time' AND  patient_id= '$patient_id'";
        $stmt = $this->db->prepare($query);
        $stmt->execute();   
        return $stmt->fetchAll();
    }
    function getTestId($testType){
        $query = "SELECT test_id FROM test WHERE name= '$testType'";
        $stmt = $this->db->prepare($query);
        $stmt->execute();   
        return $stmt->fetchAll();
    }
    function testTypeInsert($booking_id, $test_id){
        $query = "INSERT INTO booking_test_type (booking_id,test_id,status)  VALUES ('$booking_id', '$test_id','booked')";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $this->db->lastInsertId();
    }

    function searchPatient($search){
        $query = "SELECT patient.patient_id, user.first_name,user.last_name,user.contact,user.email FROM patient, user WHERE patient.user_id = user.user_id 
        AND (patient.patient_id LIKE '%".$search."%' 
        OR user.first_name LIKE '%".$search."%' 
        OR user.last_name LIKE '%".$search."%' 
        OR user.contact LIKE '%".$search."%' 
        OR user.email LIKE '%".$search."%')";
        $stmt = $this->db->prepare($query);
        $stmt->execute();   
        return $stmt->fetchAll();
    }
    function searchBooking($search){
        $query = "SELECT booking.patient_id, booking.booking_date, user.first_name, user.last_name , test.name, booking.booking_time FROM booking, patient, user, test, booking_test_type WHERE patient.user_id = user.user_id AND booking.patient_id = patient.patient_id
        AND  booking.booking_id = booking_test_type.booking_id AND test.test_id = booking_test_type.test_id AND booking.booking_date >= CURRENT_DATE() AND
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
    function cancelBooking($patient_id, $booking_date,$booking_time ){
        $query = "DELETE FROM booking WHERE patient_id ='$patient_id' AND booking_date ='$booking_date' AND booking_time ='$booking_time'";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $this->db->lastInsertId();
    }
    function getTestTypes($booking_id){
        $query = "SELECT name FROM  test, booking_test_type WHERE test.test_id = booking_test_type.test_id AND booking_test_type.booking_id= '$booking_id'";
        $stmt = $this->db->prepare($query);
        $stmt->execute();   
        return $stmt->fetchAll();
    }
    function testTypeCancel($booking_id,$oldTestType){
        $query = "UPDATE booking_test_type, test SET status = 'cancelled' WHERE booking_test_type.booking_id  = '$booking_id' AND booking_test_type.test_id= (SELECT test_id FROM test WHERE name = '$oldTestType')";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
       
        return $this->db->lastInsertId();
       
    }
    function scheduleUpdate($booking_id,$date,$time){
        $query = "UPDATE booking SET booking_date= '$date' ,booking_time= '$time' WHERE booking_id = '$booking_id'";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
       
        return $this->db->lastInsertId();  
    }
    function getCount(){
        $query = "SELECT * FROM user WHERE title = 'Patient'";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $count = $stmt->rowCount();
    }
    function getData($offset, $no_of_records_per_page){
        $query = "SELECT * FROM user WHERE title = 'Patient' LIMIT $offset, $no_of_records_per_page";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    function getCountOfSchedule(){
        $query = "SELECT * FROM booking";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $count = $stmt->rowCount();
    }
    function getDataOfSchedule($offset, $no_of_records_per_page){
        $query = "SELECT * FROM booking LIMIT $offset, $no_of_records_per_page";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
