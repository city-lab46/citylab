<?php
class patient extends Controller{

    public function __construct(){
        parent::__construct();
    }
    public function index(){    
		if($_SESSION['title'] ==  "Receptionist" ){
			 $this->view->render("receptionist/addPatient");
		}
    }
	
	public function patientHistory(){
        if(isset($_POST['search'])){
            $this->view->result = $this->model->searchPatient($_POST['search']);       
            $this->view->render("receptionist/patientHistory");
        }else{
        $data5 = [];
        if (isset($_GET['pageno'])) {
            $pageno = $_GET['pageno'];
        } else {
            $pageno = 1;
        }
        $no_of_records_per_page = 7;
        $offset = ($pageno-1) * $no_of_records_per_page;
        $total_rows = $this->model->getCount();
        

        
        
        $data5['result'] = $result;
        $data5['pageno'] = $pageno;
        $data5['pages'] = $total_pages;
        $_SESSION['data5'] = $data5;
            $this->view->result = $this->model->getPatientDetails($offset, $no_of_records_per_page);       
            $this->view->render("receptionist/patientHistory");
        }
        
    }

    public function initiate(){
        $errors = [];
        $errors["username"]="";
        $errors["firstname"]="";
        $errors["lastname"]="";
        $errors["dob"]="";
        $errors["password"]="";
        $errors["email"]="";
        $errors["gender"]="";
        $errors["contact"]="";
        return $errors;
    }
    public function submit(){
        $data['errors']=$errors=$this->initiate();
        
        if (isset($_POST['submit'])) {
            
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $dob = $_POST['dob'];
            $gender = $_POST['gender'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $confirmPassword = $_POST['confirmPassword'];
            $contact = $_POST['contact'];
            $title = "Patient";
        
            //Verify data

            //if (!$this->model->verify($email,"/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/")) { $errors["email"]="Input valid email address"; }
            //if (!$this->model->verify($password,"/^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$/")) { $errors["password"]="Password must be strong"; }
            //if (!$this->model->verify($contact,"/^[0-9]+$/")) { $errors["contact"]="Must only contain numbers"; }

            if (empty($username)) { $errors["username"]="Username is required"; }
            if (empty($email)) { $errors["email"]="Email is required"; }
            if (empty($firstname)) { $errors["firstname"]="First Name is required"; }
            if (empty($lastname)) { $errors["lastname"]="Last Name is required"; }
            if (empty($dob)) { $errors["dob"]= "Date of birth is required"; }
            if (empty($password)) { $errors["password"]= "Password is required"; }
            if (empty($gender)) { $errors["gender"]= "Gender is required"; }
            if (empty($contact)) { $errors["contact"]= "Contact Number is required"; }
            if ($password != $confirmPassword) {$errors["password"]= "Passwords are not matched";}
            if ($this->model->usernameCheck($username)) {$errors["username"]= "Username already exists";}
            if ($this->model->emailCheck($email)) {$errors["email"]= "Email already exists";}
            
        } 
        $numberOfErrors=0;
        foreach ($errors as $key => $value){
            if($value!=""){
                $numberOfErrors++;
            }
        }
        
        if ($numberOfErrors== 0) {
            $userId = $this->model->addPatient($firstname,$lastname,$email,$dob,$gender,$username,$password,$contact,$title);
            $register = $this->model->addPatientId($userId);
            $this->view->render("receptionist/addPatient");
        }
        
        $data['errors']=$errors;
        $this->view->render("receptionist/addPatient", $data);
        
    }
    public function edit(){
        // $_SESSION['patientId'] = $_GET['patient_id'];
        $errors=$this->initiate();
        
        $this->view->patient_id = $_GET['patient_id'];
        
        
        if(isset($_POST['update'])) {
            
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $dob = $_POST['dob'];
            $gender = $_POST['gender'];
            $username = $_POST['username'];
            $password = $_POST['password'];
            $confirmPassword = $_POST['confirmPassword'];
            $contact = $_POST['contact'];
            $title = "Patient";

            if (empty($username)) { $errors["username"]="Username is required"; }
            if (empty($email)) { $errors["email"]="Email is required"; }
            if (empty($firstname)) { $errors["firstname"]="First Name is required"; }
            if (empty($lastname)) { $errors["lastname"]="Last Name is required"; }
            if (empty($dob)) { $errors["dob"]= "Date of birth is required"; }
            if (empty($password)) { $errors["password"]= "Password is required"; }
            if (empty($gender)) { $errors["gender"]= "Gender is required"; }
            if (empty($contact)) { $errors["contact"]= "Contact Number is required"; }
            if ($password != $confirmPassword) {$errors["password"]= "Passwords are not matched";}
            // if ($this->model->usernameCheck($username)) {$errors["username"]= "Username already exists";}
            // if ($this->model->emailCheck($email)) {$errors["email"]= "Email already exists";}
            

            $numberOfErrors=0;
            foreach ($errors as $key => $value){
                if($value!=""){
                    $numberOfErrors++;
                }
            }
        
            //echo "<script>alert('{$numberOfErrors}');</script>";
        
            //echo "<script>alert('{$_GET['patient_id']}');</script>";
            if ($numberOfErrors== 0) {
                $user_ids = $this->model->getPatientByPatientId($_GET['patient_id']);
            
                if(!empty($user_ids)){
                    foreach($user_ids as $user_id){
                        $userId = $user_id['user_id'];
                    }
                }
                
                $result = $this->model->updatePatient($userId,$firstname,$lastname,$email,$dob,$gender,$username,$password,$contact,$title);
                //echo "<script>alert('hello');</script>";
                // $this->view->render("receptionist/addPatient");
                // $this->view->render("receptionist/patientHistory");
                header("Location: http://localhost/citylab/patient/patientHistory");

            }
        
            // $data['errors']=$errors;
            // $this->view->render("receptionist/patientHistory");
        }
        else{
            $this->view->result = $this->model->getPatientDetailsByPatientId($_GET['patient_id']);
        
            $this->view->render("receptionist/editPatient");
        }
        
    }

    public function delete(){
        $val = $_GET['patient_id'];
        
        if(isset($_GET['patient_id'])){
            
            $this->view->result = $this->model->deletePatient($val);
             
            echo "<script>alert('Patient deleted Successfully');</script>"; 
            $this->view->render("Receptionist/patientHistory");
            // $this->redirect("patient/patientHistory");
        
        }else{
            $this->view->render("receptionist/patientHistory");
        }
        
    }

}
