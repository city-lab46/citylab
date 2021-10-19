<?php

class payModel extends Model{
    public $patientId;

    function __construct(){
        parent::__construct();
    }

    function getData($patientId){
        $query = "SELECT * FROM booking INNER JOIN booking_test_type ON booking.booking_id = booking_test_type.booking_id INNER JOIN test ON test.test_id = booking_test_type.test_id WHERE patient_id = '$patientId' LIMIT 1";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }

}