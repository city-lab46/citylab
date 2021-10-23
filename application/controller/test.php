<?php
class test extends Controller{

    public function __construct(){
        parent::__construct();
    }
    
    public function index(){       

    }

    public function records(){     
        //$result = $this->model->getDetails($patientId);  
        $this->view->render("patient/test");
    }

    public function report(){ 
        //$result = $this->model->getDetails($patientId);      
        $this->view->render("patient/report");
    }
    
}