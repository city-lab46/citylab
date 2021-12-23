<?php

class book extends Controller{
	public $patientId;

	public function __construct(){
		parent::__construct();
	}

	public function index(){
		//if($_SESSION['title'] == "Patient" ){
		$data = [];
        $result = $this->model->getTests();
        $data['result'] = $result;

        $this->view->render("patient/book", $data);
	}

	public function create(){
		//isset() date and test
		$patientId = "P".$_SESSION['user_id'];
		$date =  $_GET['date'];
		$testId =  $_GET['testId'];
		$count = $this->model->bookCount($patientId);
		
		if($count == 0){
			$bookingId = $this->model->bookInsert($patientId,$date);
			$test = $this->model->testInsert($testId,$bookingId);
            $this->redirect("pay");
		}
		else{
			echo "<script>alert('Already Placed Booking.')</script>";
			echo "<script>window.location.href='../home'</script>";
		}
	}

	public function cancel(){
		$bookingId = $_POST['bookingId'];
		
		$result = $this->model->bookCancel($bookingId);
		echo "<script>alert('Booking Canceled')</script>";
		echo "<script>window.location.href='../home'</script>";
	}

}


