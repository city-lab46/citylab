<?php

class article extends Controller{

    public function __construct(){
        parent::__construct();
    }
    
    public function index(){       
        $this->view->render("patient/article");
    }

    public function asd(){       
        $this->view->render("CLS/article");
    }

    /*
    public function publication(){       
        $result = $this->model->getArticle();
    }*/
    
}