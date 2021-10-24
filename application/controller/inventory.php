<?php
class inventory extends Controller{

    public function __construct(){
        parent::__construct();
    }
    public function index(){    

    }

    public function insert(){   
        $this->view->render("CLS/inventoryInsert");
    }

    public function history(){   
        $this->view->render("CLS/inventoryHistory");
    }

}
