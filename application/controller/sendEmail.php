<?php 
use PHPMailer\PHPMailer\PHPMailer;
if (isset($_POST['name']) && isset($_POST['email']))
{
    $name = $_POST['name']; 
    $email = $_POST['email']; 
    $subject = $_POST['subject']; 
    $body = $_POST['body']; 

    require_once "../system/helpers/PHPMailer/PHPMailer.php"; 
    require_once "../system/helpers/PHPMailer/SMTP.php"; 
    require_once "../system/helpers/PHPMailer/Exception.php";

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
    $mail->addAddress("my.soclntwrks@gmail.com"); 
    $mail->Subject = ("$email ($subject)"); 
    $mail->Body = $body; 
    if($mail->send()){ 
        $status = "success"; 
        $response = "Email is sent!"; 
    } else{
        $status = "failed"; 
        $response = "Something is wrong: <br>".$mail->ErrorInfo;
    }
    exit(json_encode(array("status"=>$status,"response"=>$response)));
}
?>
