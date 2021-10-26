<?php
class home extends Controller{
    public function __construct(){
        parent::__construct();
    }
    public function index(){ 
        if($_SESSION['title'] == "Patient" ){
            $this->view->render("patient/home");
        }  
        if($_SESSION['title'] == "CLS" ){
            $this->view->render("CLS/home");
        } 
        if($_SESSION['title'] == "doctor" ){
            $this->view->render("doctor/home");
        }      
    }

    public function articles(){   
        if($_SESSION['title'] == "Patient" ){
            $this->view->render("patient/home");
        }  
        if($_SESSION['title'] == "CLS" ){
            $this->view->render("CLS/home");
        } 
        if($_SESSION['title'] == "doctor" ){
            $this->view->render("doctor/home");
        }
        
    }

    public function testTypes(){       
        if($_SESSION['title'] == "Patient" ){
            $this->view->render("patient/testTypes");
        }  
        if($_SESSION['title'] == "CLS" ){
            $this->view->render("CLS/testTypes");
        } 
        if($_SESSION['title'] == "doctor" ){
            $this->view->render("doctor/testTypes");
        }
    }

}