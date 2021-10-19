<?php

class book extends Controller{
	public $patientId;

	public function __construct(){
		parent::__construct();
	}

	public function index(){
		$patientId = "P".$_SESSION['user_id'];
		$data = [];
		$result = $this->model->getBookDetails($patientId);
		$data['result'] = $result;
		$this->view->render("book",$data);
	}

	public function insert(){
		$patientId = "P".$_SESSION['user_id'];
		$date =  $_POST['date'];
		$testID =  $_POST['testID'];
		$count = $this->model->bookCount($patientId);
		
		if($count == 0){
			$bookingId = $this->model->bookInsert($patientId,$date);
			$test = $this->model->testInsert($testID,$bookingId);
            $this->redirect("pay");
		
		}
		else{
			echo "<script>alert('Already Placed Booking.')</script>";
			echo "<script>window.location.href='index'</script>";
		}
	}

}


