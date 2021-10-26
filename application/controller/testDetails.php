<?php

class testDetails extends Controller{

    public function __construct(){
        parent::__construct();
    }
    
    public function index(){   
        if($_SESSION['title'] == "Patient" ){
            $this->view->render("patient/testDetails");
        }  
        if($_SESSION['title'] == "CLS" ){
            $this->view->render("CLS/testDetails");
        } 
        if($_SESSION['title'] == "doctor" ){
            $this->view->render("doctor/testDetails");
        }         
    }

    /*
    public function test-details(){       
        $result = $this->model->getDetails();
    }*/
    
}