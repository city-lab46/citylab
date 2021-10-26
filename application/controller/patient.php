<?php
class patient extends Controller{

    public function __construct(){
        parent::__construct();
    }
    public function index(){    

    }

    public function search(){   
        $this->view->render("doctor/patient");
    }

}
