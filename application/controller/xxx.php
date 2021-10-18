<?php

class xxx extends Controller{

    function __construct(){
        parent::__construct();
    }

    function index(){

        $this->view->variableName = $this->model->getData();
        $this->view->render("xxx"); //xxx is the view file name
        //$this->model->print();
    }

    public function insert()
    {
        $name =  $_POST['name'];
        $user = $this->model->insertUser($name);
        //$this->redirect("deleteModerator");
    }
}