<?php

class login extends Controller {

    public function __construct(){
        parent::__construct();
        //logs
        
    }

    public function index(){  
        $this->view->render("login");
    }

    public function submit(){

        $errors = [];
        
        if (isset($_POST['login'])) {
        
            $username = $_POST['username'];
            $password = $_POST['password'];

        
            /*if (!verify($email, "/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/")) array_push($errors, "Input valid email address");
        
            if (!empty($errors)) {
                $_SESSION['login-errors'] = $errors;
                $this->view->render("login"); // right?
                die();
            }*/

            //Sanitize data
            //$username = $conn->real_escape_string($username);
            //Password hasing
            //$password = md5($conn->real_escape_string($password));
        
            $result = $this->model->checkAccount($username,$password);
            
            if ($result) {
                var_dump($result);
                //$resultSet = $result->fetch_assoc();
                //var_dump($resultSet);
                $_SESSION['login-message'] = "Login Succesful";
                $_SESSION['login'] = true;
                $_SESSION['user_id'] = $result['user_id'];
                $_SESSION['first_name'] = $result['first_name'];
                $_SESSION['last_name'] = $result['last_name'];
                $_SESSION['username'] = $result['username'];
                $_SESSION['contact'] = $result['contact'];
                $_SESSION['email'] = $result['email'];
                $_SESSION['title'] = $result['title'];
                $_SESSION['dob'] = $result['dob'];
                $_SESSION['gender'] = $result['gender'];
        
                if($_SESSION['title'] == "Patient" ){
                    $this->redirect('patientHome');

                }
                else if($_SESSION['title'] == "Doctor" ){
                    header("Location: ../Patient/test.html");
                    die();
                }
                else if($_SESSION['title'] == "CLS" ){
                    header("Location: cls-home-page.php");
                    die();
                }
                else if($_SESSION['title'] == "Receptionist" ){
                    header("Location: receptionist-home-page.php");
                    die();
                }
                else if($_SESSION['title'] == "Admin" ){
                    header("Location: admin-home-page.php");
                    die();
                }
            
            } else {
                $_SESSION['login-errors'][0] = "Invalid Username or Password";
                $this->redirect('login');              
            }
        } else {
            echo "Invalid request";
        }
        
    }

    function verify($data, $pattern){
        if (preg_match($pattern, $data)) return  true;
        return false;
    }
}