<?php
class bill extends Controller{

    public function __construct(){
        parent::__construct();
    }
    
    public function index(){       
        $this->view->render("receptionist/addBillPatient");
    }
    public function addBillForm(){       
        $this->view->render("receptionist/addBillForm");
    }
    public function billHistory(){       
        $this->view->render("receptionist/billHistory");
    }
    
}