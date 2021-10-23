<?php
class pay extends Controller{

    public function __construct(){
        parent::__construct();
    }
    
    public function index(){  
        $patientId = "P".$_SESSION['user_id'];  
        $data = [];
        $result = $this->model->getData($patientId);
        $data['result'] = $result;

        $this->view->render("patient/pay", $data);
        
    }


}
