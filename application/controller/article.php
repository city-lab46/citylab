<?php

class article extends Controller{

    public function __construct(){
        parent::__construct();
    }
    
    public function index(){       
        $this->view->render("patient/article");
    }

    /*
    public function publication(){       
        $result = $this->model->getArticle();
    }*/
    
}