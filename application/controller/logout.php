<?php
class logout extends Controller{

    public function __construct(){
        parent::__construct();
    }
    
    public function index(){  
        session_destroy();
        $this->redirect('login');
    }
}