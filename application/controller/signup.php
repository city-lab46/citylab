<?php

class signup extends Controller{

    public function __construct(){
        parent::__construct();
    }

    public function index(){
        //Initially no errors
        $data['errors'] = $this->initiate();
        $this->view->render("signup", $data);
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
            $this->redirect("login"); 
        }
        
        $data['errors']=$errors;
        $this->view->render("signup", $data);
        
    }

}

