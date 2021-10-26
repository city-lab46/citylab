<?php
class settings extends Controller{
    public $patientId;

    public function __construct(){
        parent::__construct();
    }
    public function index(){             
        
    }
    
    public function patient(){             
        $patientId = $_SESSION['user_id'];    
        $this->view->result = $this->model->getData($patientId);        
        $this->view->render("patient/settings");
    }

    public function CLS(){ 

        $this->view->render("CLS/settings");
    }

    public function doctor(){     

        $this->view->render("doctor/settings");
    }

}