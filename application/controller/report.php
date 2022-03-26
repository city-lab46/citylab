<?php

class report extends Controller{

    public function __construct(){
        parent::__construct();
    }
    
    public function index(){ 
        if($_SESSION['title'] == "Patient" ){ 
            $this->view->render("patient/report");
        }

        if($_SESSION['title'] == "CLS" ){ 
        $data6 = [];
        if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 7;
        $offset = ($pageno-1) * $no_of_records_per_page;
        $total_rows = $this->model->getCount();
        $total_pages = ceil($total_rows / $no_of_records_per_page);

        
        
        
        $data6['pageno'] = $pageno;
        $data6['pages'] = $total_pages;
        $_SESSION['data6'] = $data6;
            $this->view->result = $this->model->getPatientDetails($offset, $no_of_records_per_page);      
            $this->view->render("CLS/patientCreateReport");
        }
    }
    public function insert(){
        if(isset($_POST['submit'])){
            if (isset($_POST['result']) && isset($_POST['unit']) && isset($_POST['speci_examined'])&& isset($_POST['test'])) {
                if ( !empty($_POST['result']) && !empty($_POST['unit']) && !empty($_POST['speci_examined']) && !empty($_POST['test'])) {
                    $created_date = date("Y-m-d");
                    $result = $_POST['result'];
                    $unit = $_POST['unit'];
                    $speci_examined = $_POST['speci_examined'];
                    $test = $_POST['test'];
                
                    if(isset($_SESSION['doctor_id'])){
                        $doctor_id = $_SESSION['doctor_id'];                      
                        $counts = $this->model->reportInsert($created_date , $result , $unit , $speci_examined , $test, $doctor_id);
                    }else{
                        $counts = $this->model->reportInsert2($created_date , $result , $unit , $speci_examined , $test);  
                    }
                    session_destroy();
                    
                    $message = 'Added Test Type:'.$test;
                    
                    //$sender =  $_SESSION['user_id'];
                    $sender =  '101';
                    $this->view->recei = $this->model->selectAdmin();
                    $rec = $this->view->recei;
                    foreach($rec as $receiv ){
                        $receiver = $receiv['user_id'];
                    }
                    
                    $creat_date =  date("Y-m-d");
                    $created_time = date("h:i:sa");
                    $status = 0;
                    $this->view->id = $this->model->selectId();
                    $ids = $this->view->id;
                    foreach($ids as $id1 ){
                        $reId = $id1['report_id'];
                    }
                    
                    $title = 'Report ID:'.$reId;
                    $counts1 = $this->model->notificationInsert($message, $title,  $created_time, $sender, $receiver,$creat_date, $status);
                    $emailResult = $this->model->sendEmail($message);
                    if($emailResult){
                    echo "<script>alert('Email sent successfully');</script>";
                    }else{
                    echo "<script>alert('Email sent unsuccessfully');</script>";
                    }
                    echo "<script>alert('records added successfully');</script>";
                    $this->view->render('CLS/viewHistory');
                }else{
                    echo "<script>alert('empty');</script>";
                    echo "<script>window.location.href = '<?php echo BASEURL.'/report/createReport'?>';</script>";
                }
            }else {       
                    echo "<script>alert('failed');</script>";
                    echo "<script>window.location.href = '<?php echo BASEURL.'/report/createReport'?>';</script>";
            }
        }else if(isset($_POST['cancel'])){
                $this->view->render("CLS/createReport");
        }
	}

    public function edit(){
        $report_id = $_GET['report_id'];
        $this->view->report_id = $_GET['report_id'];
        $this->view->result = $this->model->getOneReportDetails($_GET['report_id']);
        $this->view->render("CLS/editReport");
        if(isset($_POST['update'])) {
            if ( isset($_POST['created_date']) && isset($_POST['result']) && isset($_POST['unit']) && isset($_POST['speci_examined'])&& isset($_POST['test'])) {
                if (!empty($_POST['created_date']) && !empty($_POST['result']) && !empty($_POST['unit']) && !empty($_POST['speci_examined']) && !empty($_POST['test'])) {
                    $created_date = $_POST['created_date'];
                    $result = $_POST['result'];
                    $unit = $_POST['unit'];
                    $speci_examined = $_POST['speci_examined'];
                    $test = $_POST['test'];
                    $counts = $this->model->reportUpdate($_SESSION['repId'],$created_date ,$result ,$unit ,$speci_examined ,$test);
                    
                    if($counts){
                        echo "<script>alert('updated successfully');</script>";  
                    }else{
                        echo "<script>alert('failed');</script>";
                    }
                    
                    $this->view->render("CLS/viewHistory");

                }  else{
                    echo "<script>alert('empty');</script>";
                    $this->view->render("CLS/editReport");
                }
               
             }
              else {
                    
                    echo "<script>alert('failed');</script>";
                    $this->view->render("CLS/editReport");
                }
        }
        if(isset($_POST['cancel'])) {
            $this->view->render("CLS/viewHistory");
        }
        
    }

    public function delete(){ 
        
        $this->view->result = $this->model->deleteReportDetails($_GET['report_id']);
        echo "<script>alert('Deleted Successfully');</script>";  
        $this->view->render("CLS/viewHistory");
    }

    public function viewHistory(){
            
            $data7 = [];
            if (isset($_GET['pageno'])) {
                $pageno = $_GET['pageno'];
            } else {
                $pageno = 1;
            }
            $no_of_records_per_page = 7;
            $offset = ($pageno-1) * $no_of_records_per_page;
            $total_rows = $this->model->getCountOfReport();
            $total_pages = ceil($total_rows / $no_of_records_per_page);
    
            
            
            
            $data7['pageno'] = $pageno;
            $data7['pages'] = $total_pages;
            $_SESSION['data7'] = $data7;
        $this->view->result = $this->model->getreportDetails($offset, $no_of_records_per_page);   
            
        $this->view->render("CLS/viewHistory"); 
        
    }

    public function searchHistory(){
        $this->view->result = $this->model->getOneReportDetails($_POST['search']); 
        
        $this->view->render("CLS/viewHistory");
    }

    public function createReport(){
        $this->view->render("CLS/createReport");
        
    }
    public function recommendDoctor(){
        $data7 = [];
        if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 7;
        $offset = ($pageno-1) * $no_of_records_per_page;
        $total_rows = $this->model->getCountDoctor();
        $total_pages = ceil($total_rows / $no_of_records_per_page);

        
        
        
        $data7['pageno'] = $pageno;
        $data7['pages'] = $total_pages;
        $_SESSION['data7'] = $data7;
        $this->view->result = $this->model->getDoctorDetails($offset, $no_of_records_per_page); 
        $this->view->render("CLS/recommendDoctor");
        if(isset($_GET['doctor_id'])){
            $_SESSION['doctor_id'] = $_GET['doctor_id'];
            echo "<script>alert('doctor Successfully');</script>";
            $this->view->render("CLS/createReport"); 
        }

        
    }
    // public function addRecommendation(){
        
    //     $this->view->render("CLS/createReport");
    // }

    public function search(){
        $this->view->result = $this->model->getOnePatientDetails($_POST['search']);
        
        $this->view->render("CLS/patientCreateReport");
    }

    public function searchDoctor(){
        $this->view->result = $this->model-> getOneDoctorDetails($_POST['search']);
        
        $this->view->render("CLS/recommendDoctor");
    }

    
}

    

