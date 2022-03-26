<?php
class bill extends Controller{

    public function __construct(){
        parent::__construct();
    }
    
    public function index(){ 
        if(isset($_POST["search"])){
            $this->view->result = $this->model->searchBooking($_POST['search']); 
            $this->view->render("receptionist/addBillPatient"); 
        }else{
        $data3 = [];
        if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 7;
        $offset = ($pageno-1) * $no_of_records_per_page;
        $total_rows = $this->model->getCount();
        $total_pages = ceil($total_rows / $no_of_records_per_page);

        
        
        
        $data3['pageno'] = $pageno;
        $data3['pages'] = $total_pages;
        $_SESSION['data3'] = $data3;
        $this->view->result = $this->model->getPatientBookingDetails($offset, $no_of_records_per_page);       
        $this->view->render("receptionist/addBillPatient");
        }
    }
    public function addBillForm(){
        if(isset($_GET['patient_id']) && isset($_GET['booking_date']) && isset($_GET['booking_time'])){
            $patient_id = $_GET['patient_id'];
            session_destroy();
            $_SESSION['patientID'] = $patient_id;
            $count = $this->model->getBookingId($_GET['patient_id'],$_GET['booking_date'],$_GET['booking_time']);
            if(!empty($count)){
                foreach($count as $booking_ids){
                    $booking_id =  $booking_ids['0'];
                }
            }
            $total_amount = 0;
            $i = 0;
            $tests =   $this->model->getTestTypes($booking_id);
            if(!empty($tests)){
                foreach($tests as $test){
                    $test_id =  $test['0'];
                    $counts2 = $this->model->getTestNameAndCost($test_id);
                    $_SESSION['testCost'][$i] = $counts2;
                    $i = $i + 1;
                    $test_cost =   $this->model->getTestCost($test_id);
                    if(!empty($test_cost)){
                    foreach($test_cost as $cost){
                        $total_amount = $total_amount + $cost['0'];
                        
                    }
                }
                }
            }
            
            
            $counts = $this->model->billInsert($total_amount,$booking_id );

            echo "<script>alert('Bill added successfully');</script>";
            $counts1 = $this->model->getBillId($booking_id);
            if(!empty($counts1)){
                foreach($counts1 as $bill_ids){
                    $bill_id =  $bill_ids['0'];
                }
            }
            $this->view->result = $this->model->getBillDetails($bill_id, $patient_id);
            $this->view->render("receptionist/addBillForm");
        }else{
            $this->view->render("receptionist/addBillForm");
        }      
        
    }
    public function billHistory(){ 
        if(isset($_POST["search"])){
            $this->view->result = $this->model->searchBill($_POST['search']); 
            $this->view->render("receptionist/billHistory"); 
        }else{
        $data4 = [];
        if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 8;
        $offset = ($pageno-1) * $no_of_records_per_page;
        $total_rows = $this->model->getCountOfBill();
        $total_pages = ceil($total_rows / $no_of_records_per_page);

        
        
        $data4['result'] = $result;
        $data4['pageno'] = $pageno; 
        $data4['pages'] = $total_pages;
        
        $_SESSION['data4'] = $data4;
            $this->view->result = $this->model->getPatientBillDetails($offset, $no_of_records_per_page);       
            $this->view->render("receptionist/billHistory");
        }      
        
    }
    
}