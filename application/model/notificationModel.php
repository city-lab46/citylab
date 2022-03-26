
<?php
 use PHPMailer\PHPMailer\PHPMailer;
class notificationModel extends Model{
    
    function __construct(){
        parent::__construct();
    }

    function statusUpdate(){
        $query = "UPDATE notification SET status = 1 WHERE status=0";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $this->db->lastInsertId();
    }

    function getNotifications($offset, $no_of_records_per_page){
        $query = "SELECT * FROM notification WHERE notification.receiver = (SELECT user_id FROM user WHERE title IS NULL)   ORDER BY notification_id DESC LIMIT $offset, $no_of_records_per_page ";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    
    function getUnSeenNotifications(){
        $query = "SELECT * FROM notification WHERE status=0";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    function createNotification($message, $title, $sender_id, $receiver_id){
        $query = "INSERT INTO notification (message,title,sender,receiver, status)  VALUES ('$message', '$title','$sender_id', '$receiver_id', 0 );";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $this->db->lastInsertId();
    }
    function getCommonUserId(){
        $query = "SELECT user_id FROM user WHERE title IS NULL";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    function searchNotification($search){
        $query = "SELECT notification_id,message, created_date  FROM notification WHERE notification.receiver = (SELECT user_id FROM user WHERE title IS NULL) AND 
         (notification_id LIKE '%".$search."%' 
        OR message LIKE '%".$search."%' 
        OR  created_date LIKE '%".$search."%' )";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    function getCount(){
        $query = "SELECT * FROM notification";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $count = $stmt->rowCount();
    }
    function getData($offset, $no_of_records_per_page){
        $query = "SELECT * FROM notification LIMIT $offset, $no_of_records_per_page";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    function sendEmail($message,$user_id){
        $query = "SELECT first_name,last_name,email FROM user WHERE user_id = '$user_id'";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll();
        $name = $result['0']['first_name']." ".$result['0']['last_name'];
        $email = $result['0']['email'];
        $email_subject = "Notification come from City Lab";
        $email_body = "Dear {$name},\n";
        $email_body .= $message;
        $from = "From: citylab46@gmail.com";
        

       

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
}