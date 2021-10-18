<?php

class bookController extends sysController{
	public function __construct()
	{
		$this->helper("linker");
		$this->model = $this->model('addModeratorModel');
	}
	public function index()
	{
		$data=array();
		$this->view("addModeratorView",$data);
	}

	public function insert()
	{
		$firstname =  $_POST['firstname'];
		$lastname =  $_POST['lastname'];
		$email =  $_POST['email'];
		$startdate =  $_POST['startDate'];
		$user = $this->model->insertmod($firstname,$lastname,$email,$startdate);
	}

}

	/*$patient_id = "P".$_SESSION['user_id'];
	$result = getBookID($patient_id);

	if (isset($_GET['cancel'])) {
		$id = $conn->real_escape_string($_GET['booking_id']);

		bookCancel($id);
	}

	if (isset($_GET['submitData'])) {
		
		$date = $conn->real_escape_string($_GET['date']);
		$test_id = $conn->real_escape_string($_GET['test_id']);
		
		bookInsert($date, $test_id, $patient_id);
		
	}*/


