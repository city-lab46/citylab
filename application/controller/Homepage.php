<?php

class Homepage extends Controller {

    function __construct(){
        parent::__construct();
        //call model if need
    }

    function index(){
        $this->view->render("main/homepage");
    }

    function blogs(){
        $this->view->render("main/blogs");
    }

    function services(){
        $this->view->render("main/services");
    }

    function about(){
        $this->view->render("main/about");
    }
    
    function contact(){
        $this->view->render("main/contact");
    }
    


}