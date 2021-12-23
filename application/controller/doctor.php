<?php
class doctor extends Controller{

    public function __construct(){
        parent::__construct();
    }
    public function index(){   
        //if($_SESSION['title'] == "Patient" ){ 
        $data = [];
        $result = $this->model->getData();
        $data['result'] = $result;

        $this->view->render("patient/doctor", $data);
    }

    public function personalDoctor(){   
        //if($_SESSION['title'] == "Patient" ){ 
        $patientId = "P".$_SESSION['user_id'];
        $data = [];
        $result = $this->model->getDoctor($patientId);
        $data['result'] = $result;

        $this->view->render("patient/personalDoctor", $data);
    }

}
