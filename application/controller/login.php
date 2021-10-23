<?php

class login extends Controller {

    public function __construct(){
        parent::__construct();
        //logs
        
    }

    public function index(){ 
        $errors = [];
        $errors["username"]="";
        $errors["password"]=""; 
        $data['errors']=$errors;
        $this->view->render("login",$data);
    }

    public function submit(){

        $errors = [];
        $errors["username"]="";
        $errors["password"]=""; 

        if (isset($_POST['login'])) {
        
            $username = $_POST['username'];
            $password = $_POST['password'];

            if (empty($username)) { $errors["username"]= "Username required"; }
            if (empty($password)) { $errors["password"]= "Password required"; }
        
            $numberOfErrors=0;
            foreach ($errors as $key => $value){
                if($value!=""){
                    $numberOfErrors++;
                }
            }

            if ($numberOfErrors == 0){
                $user = $this->model->checkAccount($username,$password);
                
                if ($user) {
                    //var_dump($user); // true
                    //$resultSet = $user->fetch_assoc();
                    //var_dump($resultSet);
                    $_SESSION['login-message'] = "Login Succesful";
                    $_SESSION['login'] = true;
                    $_SESSION['user_id'] = $user['user_id'];
                    $_SESSION['first_name'] = $user['first_name'];
                    $_SESSION['last_name'] = $user['last_name'];
                    $_SESSION['username'] = $user['username'];
                    $_SESSION['contact'] = $user['contact'];
                    $_SESSION['email'] = $user['email'];
                    $_SESSION['title'] = $user['title'];
                    $_SESSION['dob'] = $user['dob'];
                    $_SESSION['gender'] = $user['gender'];
            
                    if($_SESSION['title'] == "Patient" ){
                        $this->redirect('home/patient');
                    }
                    else if($_SESSION['title'] == "Doctor" ){
                        $this->redirect('home');
                    }
                    else if($_SESSION['title'] == "CLS" ){
                        $this->redirect('home');
                    }
                    else if($_SESSION['title'] == "Receptionist" ){
                        $this->redirect('home');
                    }
                    else if($_SESSION['title'] == "Admin" ){
                        $this->redirect('home');
                    }
                
                } else {
                    $errors["password"] = "Invalid Username or Password";              
                }
            }  
        }
        $data['errors']=$errors;
        $this->view->render("patient/login",$data);
    }

    public function logout(){
        session_start();
        session_destroy();
        header('location:'.BASEURL);
    }

    /*function verify($data, $pattern){
        if (preg_match($pattern, $data)) return  true;
        return false;
    }*/
}