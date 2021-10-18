<?php
class patientHome extends Controller{
    public function __construct(){
        parent::__construct();
    }
    public function index(){       
        $this->view->render("patientHome");
    }

    public function articles(){       
        $this->view->render("patientHome");
    }

    public function testTypes(){       
        $this->view->render("testTypes");
    }
    

}