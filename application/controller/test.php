<?php
class test extends Controller{

    public function __construct(){
        parent::__construct();
    }
    
    public function index(){   
        if($_SESSION['title'] == "Patient" ){  
            $patientId = "P".$_SESSION['user_id']; 
            $data = [];
            $result = $this->model->getRecords($patientId);
            $data['result'] = $result;
 
            $this->view->render("patient/test", $data);
        }
    }

    public function records(){  
        //$_SESSION['title'] = "Doctor"
        $patientId = $_GET['patientId'];
        $data = [];
        $result = $this->model->getRecords($patientId);
        $data['result'] = $result;
        
        $this->view->render("doctor/test", $data);
    }

    public function report(){ 
        //$result = $this->model->getReport($patientId);      
        $this->view->render("patient/report");
    }
    
}