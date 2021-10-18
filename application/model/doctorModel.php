<?php

require_once 'config.php' ;

function getDocDetails(){
    global $conn;
    $sql = "SELECT * FROM user INNER JOIN doctor ON user.user_id = doctor.user_id  INNER JOIN specialization ON specialization.doctor_id = doctor.doctor_id  LEFT JOIN article ON article.doctor_id = doctor.doctor_id";
    $result = $conn->query($sql);
    return $result;
}