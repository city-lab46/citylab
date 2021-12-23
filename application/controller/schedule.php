<?php
class schedule extends Controller{

    public function __construct(){
        parent::__construct();
    }
    
    public function index(){       
        $this->view->render("receptionist/addSchedulePatient");
    }
    public function addScheduleForm(){       
        $this->view->render("receptionist/addScheduleForm");
    }
    public function scheduleHistory(){       
        $this->view->render("receptionist/scheduleHistory");
    }
    
}