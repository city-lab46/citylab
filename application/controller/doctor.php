<?php
class doctor extends Controller{

    public function __construct(){
        parent::__construct();
    }
    public function index(){    
        $data = [];
        $result = $this->model->getData();
        $data['result'] = $result;

        $this->view->render("patient/doctor", $data);
    }

    public function mydoctor(){   
        $this->view->render("patient/mydoctor");
    }

}
