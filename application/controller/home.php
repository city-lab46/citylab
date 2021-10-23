<?php
class home extends Controller{
    public function __construct(){
        parent::__construct();
    }
    public function index(){       
    }

    public function patient(){       
        $this->view->render("patient/home");
    }

    public function articles(){       
        $this->view->render("patient/home");
    }

    public function testTypes(){       
        $this->view->render("patient/testTypes");
    }
    

}