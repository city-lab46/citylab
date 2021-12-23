<?php

class Homepage extends Controller {

    public function __construct(){
        parent::__construct();
        //call model if need
    }

    public function index(){
        $this->view->render("main/Homepage");
    }

    public function blogs(){
        $this->view->render("main/blogs");
    }

    public function services(){
        $this->view->render("main/services");
    }

    public function about(){
        $this->view->render("main/about");
    }
    
    public function contact(){
        $this->view->render("main/contact");
    }
    


}