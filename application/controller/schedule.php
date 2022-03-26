<?php
class schedule extends Controller{

    public function __construct(){
        parent::__construct();
    }

    
    public function index(){
        if(isset($_POST["search"])){
            $this->view->result = $this->model->searchPatient($_POST['search']);       
            $this->view->render("receptionist/addSchedulePatient");
        }else{
        $datas = [];
        if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 7;
        $offset = ($pageno-1) * $no_of_records_per_page;
        $total_rows = $this->model->getCount();
        $total_pages = ceil($total_rows / $no_of_records_per_page);

        
        
        $datas['result'] = $result;
        $datas['pageno'] = $pageno;
        $datas['pages'] = $total_pages;
        $_SESSION['datas'] = $datas;
        $this->view->result = $this->model->getPatientDetails($offset, $no_of_records_per_page);          
        $this->view->render("receptionist/addSchedulePatient");
        }
        
    }
    public function addScheduleForm(){
        $_SESSION['p'] = $_GET['patient_id'];
        $this->view->result = $this->model->getBookingDetails();  

        $this->view->render("receptionist/addScheduleForm");
    }
    public function scheduleHistory(){ 
        if(isset($_POST["search"])){
            $this->view->result = $this->model->searchBooking($_POST['search']); 
            $this->view->render("receptionist/scheduleHistory"); 
        }else{
        $data1 = [];
        if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 4;
        $offset = ($pageno-1) * $no_of_records_per_page;
        $total_rows = $this->model->getCountOfSchedule();
        $total_pages = ceil($total_rows / $no_of_records_per_page);

        
        
        $data1['result'] = $result;
        $data1['pageno'] = $pageno;
        $data1['pages'] = $total_pages;
        $_SESSION['data1'] = $data1;
        $this->view->result = $this->model->getPatientBookingDetails($offset, $no_of_records_per_page);       
        $this->view->render("receptionist/scheduleHistory");
        }
        
    }
    
    public function insert(){
        if(isset($_POST['submit'])){
            if (isset($_POST['booking_date']) && isset($_POST['booking_time']) && isset($_POST['testTypes']) ) {
                if ( !empty($_POST['booking_date']) && !empty($_POST['booking_time']) && !empty($_POST['testTypes'])) {
                    $booking_date = $_POST['booking_date'];
                    $booking_time = $_POST['booking_time'];
                    $booking_time =  $booking_time . ":00";
                    $test_types = $_POST['testTypes'];
                    
                    $patient_id = $_SESSION['p'];
                    $counts1 = $this->model->getBookingTimeForSpecificDate($_POST['booking_date']);
                    
                    $num = 0;
                    
                    if(sizeof($counts1)<26){
                        foreach($counts1 as $data){
                                if($booking_time==$data['0']){
                                    
                                    break;
                                    
                                }else{
                                    
                                    $num=$num + 1;

                                }
                            }
                        
                        
                        if($num == sizeof($counts1)){
                            if(sizeof($_POST['testTypes'])>=1){
                                
                                echo "<script>alert('Booking Time slots available for this date and this time');</script>";
                                $counts = $this->model->bookingInsert($patient_id, $booking_date,  $booking_time);
                                foreach($_POST['testTypes'] as $testType){
                                    
                                    $booking_ids = $this->model->getBookingId($patient_id, $booking_date,  $booking_time);
                                    $test_ids = $this->model->getTestId($testType);
                                    if(!empty($test_ids)){
                                        foreach($test_ids as $test_id1){
                                            $test_id = $test_id1['0'];
                                        }
                                    }
                                    if(!empty($booking_ids)){
                                        foreach($booking_ids as $booking_id1){
                                            $booking_id =  $booking_id1['0'];
                                        }
                                    }
                                    
                                    $counts2 = $this->model->testTypeInsert($booking_id,$test_id);
                                    
                                    //$this->redirect('schedule/scheduleHistory');
                                   
                               }
                                    echo "<script>alert('Booking added successfully');</script>";
                                    $this->view->render('Receptionist/addScheduleForm');
                            }else{
                                echo "<script>alert('Select atleast one test Type');</script>";
                                $this->view->render('Receptionist/addScheduleForm');
                            }
                            
                        }else{
                            echo "<script>alert('unavailable bookings for this time on this date');</script>";
                            $this->view->render('Receptionist/addScheduleForm');
                        }
                    
                        
                         
                    }else{
                        echo "<script>alert('unavailable bookings for this date');</script>";
                        $this->view->render('Receptionist/addScheduleForm');
            
                    } 
                    
                    
                    
                    
                }else{
                    echo "<script>alert('empty');</script>";
                    echo "<script>window.location.href = '<?php echo BASEURL.'/schedule/addScheduleForm'?>';</script>";
                }
            }else {       
                    echo "<script>alert('failed');</script>";
                    echo "<script>window.location.href = '<?php echo BASEURL.'/schedule/addScheduleForm'?>';</script>";
            }
        }else if(isset($_POST['cancel'])){
                $this->view->render("schedule/addScheduleForm");
        }
    }


    public function edit(){
        $patient_id = '';
        $old_date = '';
        $old_time = '';
        $test_id = 0;
        $noOfTests = 0;
       
        if(isset($_GET['patient_id']) && isset($_GET['booking_date']) && isset($_GET['booking_time']) ){
        $this->view->result = $this->model->getOneScheduleDetails($_GET['patient_id'],$_GET['booking_date'],$_GET['booking_time']);
        $patient_id = $_GET['patient_id'];
        $old_date  = $_GET['booking_date'];
        $old_time = $_GET['booking_time'];

        // print_r($_GET['patient_id'] );
        
        }
        $booking_id = 0;
        if(isset($_POST['update'])) {
            if (  isset($_POST['booking_date']) && isset($_POST['booking_time']) && isset($_POST['testTypes']) ) {
                if ( !empty($_POST['booking_date']) && !empty($_POST['booking_time']) && !empty($_POST['testTypes'])) {
                    $patient_id = $_GET['patient_id'];
                    $old_date  = $_GET['booking_date'];
                    $old_time = $_GET['booking_time'];
                    $test_types = $_POST['testTypes'];
                    $date = $_POST['booking_date'];
                    $time = $_POST['booking_time'];
                    
                   
                    $counts1 = $this->model->getBookingId($patient_id, $old_date, $old_time);
                    
                    if(!empty($counts1)){
                        foreach($counts1 as $booking_ids){
                            $booking_id =  $booking_ids['0'];
                            
                        }
                    }
                    
                    $oldTestTypes =  $this->model->getTestTypes($booking_id);
                    if(!empty($oldTestTypes)){
                        foreach($oldTestTypes as $oldTestType){
                            $noOfTests = $noOfTests +1;
                            
                        }
                    }
                    
                    
                    $tot = 0;
                    foreach($_POST['testTypes'] as $testType){
                        $tot = 0;
                        foreach($oldTestTypes as $oldTestType){
                               if($testType == $oldTestType['0']){
                                   break;
                               }else{
                                 $tot = $tot + 1;
                                 
                               }
                        }
                        if($noOfTests== $tot){
                            $testId = $this->model->getTestId($testType);
                            
                            if(!empty($testId)){
                                foreach($testId as $test_ids){
                                    $test_id =  $test_ids['0'];
                                    
                                }
                            }
                            
                        $counts2 = $this->model->testTypeInsert($booking_id,$test_id); 
                        }
                        
                        
                                
                                   
                    }
                    $tot1 = 0;
                    foreach($oldTestTypes as $oldTestType){
                        $tot1 = 0;
                        foreach($_POST['testTypes'] as $testType){
                               if($testType == $oldTestType['0']){
                                   break;
                               }else{
                                $tot1 = $tot1 + 1;
                               }
                        }
                        if(sizeof($_POST['testTypes'])== $tot1){
                            $counts3 = $this->model->testTypeCancel($booking_id,$oldTestType['0']);
                        }
                        
                                
                                   
                    }
                
                
            
                    $counts4 = $this->model->scheduleUpdate($booking_id,$date,$time); 
                    echo "<script>window.alert('updated successfully');</script>";
                    $this->view->render("Receptionist/scheduleHistory");
                    $this->redirect("schedule/scheduleHistory");

                    
                    
                    

                }  else{
                    echo "<script>alert('empty');</script>";
                    $this->redirect("schedule/editSchedule");
                }
               
             }
              else {
                    
                    echo "<script>alert('failed');</script>";
                    $this->view->render("Receptionist/editSchedule");
                }
        }elseif(isset($_POST['cancel'])) {
            $this->view->render("Receptionist/scheduleHistory");
        }else{
            $this->view->render("Receptionist/editSchedule");
        }
        
    }
    public function delete(){
        if(isset($_GET['patient_id']) && isset($_GET['booking_date']) && isset($_GET['booking_time']) ){
            $this->view->result = $this->model->cancelBooking($_GET['patient_id'],$_GET['booking_date'],$_GET['booking_time']);
            echo "<script>alert('Booking Cancelled Successfully');</script>"; 
            //$this->view->render("Receptionist/scheduleHistory");
            $this->redirect("schedule/scheduleHistory");
        
        }else{
            $this->view->render("Receptionist/scheduleHistory");
        }
        
    }
    
    
}