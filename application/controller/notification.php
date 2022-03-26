<?php
class notification extends Controller{

    public function __construct(){
        parent::__construct();
    }
    public function index(){
        if($_SESSION['title'] == "Receptionist" ){
        $this->view->render("receptionist/createNotification");

        }
    }

    public function insert(){ 
        
        if(isset($_POST['submit'])){
            if(isset($_POST['title']) && isset($_POST['message'])){
                
                $sender_id = $_SESSION['user_id'];
                $receivers = $this->model->getCommonUserId();
                foreach($receivers as $receiver){
                    $receiver_id = $receiver['user_id'];
                    
                }
                $title =  $_POST['title'];
                $message =  $_POST['message'];
                
                $user_id = 134;
                $result = $this->model->createNotification( $message, $title, $sender_id, $receiver_id);
                echo "<script>alert('notification added successfully');</script>";
                // $this->redirect("notificationHistory");
                $emailResult = $this->model->sendEmail($message,$user_id);
                if($emailResult){
                    echo "<script>alert('Email sent successfully');</script>";
                }else{
                    echo "<script>alert('Email sent unsuccessfully');</script>";
                }
                $this->view->render("receptionist/createNotification");
            } 
        }else if(isset($_POST['cancel'])){
            $this->view->render("receptionist/createNotification");
    }
                
	}
	
	public function notificationHistory(){  
        
        $data = [];
        if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 7;
        $offset = ($pageno-1) * $no_of_records_per_page;
        $total_rows = $this->model->getCount();
        $total_pages = ceil($total_rows / $no_of_records_per_page);

        
        
        
        $data['pageno'] = $pageno;
        $data['pages'] = $total_pages;
        $_SESSION['data'] = $data;
        $this->view->result = $this->model->getNotifications($offset, $no_of_records_per_page);
        $this->view->render("receptionist/notificationHistory");
    }
    public function search(){
        if(isset($_POST['search'])){
            $this->view->result = $this->model->searchNotification($_POST['search']);
            $this->view->render("receptionist/notificationHistory");
        }
    }
    
}