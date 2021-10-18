<?php

require_once 'config.php' ;

function getBookDetails($patient_id){
    global $conn;
    $sql = "SELECT * FROM booking INNER JOIN booking_test_type ON booking.booking_id = booking_test_type.booking_id INNER JOIN test ON test.test_id = booking_test_type.test_id WHERE patient_id = '$patient_id'";
    $result = $conn->query($sql);
    return $result;
}