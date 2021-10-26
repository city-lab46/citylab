<?php

class article extends Controller{

    public function __construct(){
        parent::__construct();
    }
    
    public function index(){
        if($_SESSION['title'] == "Patient" ){
            $this->view->render("patient/article");
        }  
        if($_SESSION['title'] == "CLS" ){
            $this->view->render("CLS/article");
        } 
        if($_SESSION['title'] == "doctor" ){
            $this->view->render("doctor/article");
        }           
    }

    /*
    public function publication(){       
        $result = $this->model->getArticle();
    }*/
    
}