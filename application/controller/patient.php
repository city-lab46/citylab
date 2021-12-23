<?php
class patient extends Controller{

    public function __construct(){
        parent::__construct();
    }
    public function index(){    
		if($_SESSION['title'] == "Receptionist" ){
			 $this->view->render("receptionist/addPatient");
		}
    }

    public function myPatients(){   
        //if($_SESSION['title'] == "Patient" ){ 
        $docotrId = "D".$_SESSION['user_id'];
        $data = [];
        $result = $this->model->getPatient($docotrId);
        $data['result'] = $result;
        $this->view->render("doctor/patient", $data);
    }
	
	public function patientHistory(){       
        $this->view->render("receptionist/patientHistory");
    }

}
