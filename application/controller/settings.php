<?php
class settings extends Controller{
    public $patientId;

    public function __construct(){
        parent::__construct();
    }
    public function index(){       
        $patientId = $_SESSION['user_id'];    
        $this->view->result = $this->model->getData($patientId);
        $this->view->render("settings");
    }

}