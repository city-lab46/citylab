<?php

class article extends Controller{

    public $doctor_id;
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
        if($_SESSION['title'] == "Doctor" ){
            $this->view->render("doctor/article");
        }           
    }

    public function search(){
        $doctor_id = "D".$_SESSION['user_id'];
        $data = [];
        $result = $this->model->getArticleDetails($doctor_id);
        $data['result'] = $result;

        $this->view->render("doctor/searchArticle", $data);
    }

    public function create(){

        $this->view->render("doctor/createArticle");
    }
    
    public function delete(){

        $this->view->render("doctor/searchArticle");
    }
    /*
    public function publication(){       
        $result = $this->model->getArticle();
    }*/
    
}