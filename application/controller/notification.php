<?php
class notification extends Controller{

    public function __construct(){
        parent::__construct();
    }
    
    public function index(){ 
		if($_SESSION['title'] == "Receptionist" ){
			 $this->view->render("receptionist/createNotification");
		}
		
        /*$this->view->result1 = $this->model->getUnSeenNotifications();
        $count1 =  $this->view->result1;
        $count = $count1->num_rows;
        if(isset($_POST['view'])){

            if($_POST["view"] != '')
            {
                $counts = $this->model->statusUpdate();
               
            }
            $this->view->result = $this->model->getNotifications(); 
            $data =  $this->view->result;
            $output = '';
            if(!empty($data))
            {
             while($row = $data->fetch_asscoc())
             {
               $output .= '
            
               <button onclick="myFunction()">
               <strong>'.$row["title"].'</strong><br />
               <em>'.$row["message"].'</em>
               </button>
            
               ';
            
             }
            }
            else{
                 $output .= '
                 <li><button onclick="myFunction()" class="text-bold text-italic">No Notification Found</button></li>';
            }     
        
		}*/
	}
	
	public function notificationHistory(){  
        $this->view->render("receptionist/notificationHistory");
    }
}