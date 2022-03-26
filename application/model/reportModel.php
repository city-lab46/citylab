<?php
use PHPMailer\PHPMailer\PHPMailer;
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
        $query = "INSERT INTO notification (message, title, created_time, sender, receiver,created_date, status)  VALUES ('$message', '$title',  '$created_time', '$sender', '$receiver','$creat_date', '$status');";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $this->db->lastInsertId();
    }
    function selectId(){
        $query = "SELECT report_id FROM report WHERE report_id=(SELECT MAX(report_id) FROM report)";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    function getPatientDetails($offset, $no_of_records_per_page){
        $query = "SELECT patient_id, first_name, last_name FROM user AS u, patient AS p WHERE u.user_id = p.user_id LIMIT $offset, $no_of_records_per_page";
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
    function getCountDoctor(){
        $query = "SELECT * FROM user WHERE title='doctor' ";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->rowCount();
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
    function getreportDetails($offset, $no_of_records_per_page){
        $query = "SELECT * FROM report LIMIT $offset, $no_of_records_per_page";
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
    function sendEmail($message){
        $query = "SELECT first_name,last_name,email FROM user WHERE title = 'Admin'";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll();
        $name = $result['0']['first_name']." ".$result['0']['last_name'];
        // $email = $result['0']['email'];
        $email = "vinothinivijayakumaran08@gmail.com";
        $email_subject = "Notification come from City Lab";
        $email_body = "Dear {$name},\n";
        $email_body .= $message;
        $from = "From: samar@gmail.com";
        

       

    require_once "../system/helpers/PHPMailer/PHPMailer.php"; 
    require_once "../system/helpers/PHPMailer/SMTP.php"; 
    require_once "../system/helpers/PHPMailer/Exception.php";
    $receiver_email = $email;
    $mail = new PHPMailer(); 

    //smtp settings
    $mail->isSMTP(); 
    $mail->Host = "smtp.gmail.com"; 
    $mail->SMTPAuth = true; 
    $mail->Username = "vinothinivijayakumaran08@gmail.com"; 
    $mail->Password = 'Vin-1999'; 
    $mail->Port = 465;
    $mail->SMTPSecure = "ssl";

    $mail->isHTML(true); 
    $mail->setFrom($email, $name); 
    
    $mail->addAddress($email); 
    $mail->Subject = ("$email ($email_subject)"); 
    $mail->Body = $email_body; 
    if($mail->send()){ 
        $status = "success"; 
        $response = "Email is sent!"; 
        return true;
    } else{
        $status = "failed"; 
        $response = "Something is wrong: <br>".$mail->ErrorInfo;
        return false;
    }
    exit(json_encode(array("status"=>$status,"response"=>$response)));
    }
    function getCount(){
        $query = "SELECT patient_id, first_name, last_name FROM user AS u, patient AS p WHERE u.user_id = p.user_id ";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->rowCount();
    }
    function getCountOfReport(){
        $query = "SELECT * FROM report ";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->rowCount();
    }
}