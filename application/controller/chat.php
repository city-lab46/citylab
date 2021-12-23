<?php

class chat extends Controller{
    public function __construct(){
		parent::__construct();
	}

    public function index(){

        $sender = $_SESSION['user_id'];
        $receiver = $_GET['userId'];

        $data = [];
        $data['sender'] = $sender;
        $data['chat'] = $this->model->getChat($sender,$receiver);
        $data['userDetails'] = $this->model->getDetails($receiver);
        //$data['chatStatus'] = $this->model->getStatus($receiver);
        
        if($_SESSION['title'] == "Patient" ){
            $this->view->render("patient/chat", $data);
        }
        if($_SESSION['title'] == "Doctor" ){
            $this->view->render("doctor/chat", $data);
        }
    }

    public function send(){
    
        $sender = $_SESSION['user_id'];
        $receiver = $_GET['userId'];

        $data = [];
        $message = $_POST['message'];
        date_default_timezone_set('Asia/Colombo');
        $date = date("Y-m-d");
        $time = date("h:i:sa");
        $this->model->send($message,$sender,$receiver,$date,$time);

    }

    /*public function status(){
        $data = [];
        $sender = "101";
        $receiver = "111";
        $data['sender'] = $sender;
        $data['receiver'] = $receiver;

        $data['chatStatus'] = $this->model->getStatus($receiver);
        $data['userDetails'] = $this->model->getDetails($receiver);
        $this->view->render("chatStatus", $data);
    }*/
}
?>