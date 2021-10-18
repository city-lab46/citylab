<?php

require_once 'payModel.php' ; 

$patient_id = "P".$_SESSION['user_id'];
$result = getBookDetails($patient_id);


