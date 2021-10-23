<?php

class testDetails extends Controller{

    public function __construct(){
        parent::__construct();
    }
    
    public function index(){       
        $this->view->render("patient/testDetails");
    }

    /*
    public function test-details(){       
        $result = $this->model->getDetails();
    }*/
    
}