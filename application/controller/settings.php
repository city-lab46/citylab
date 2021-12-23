<?php
class settings extends Controller{

    public function __construct(){
        parent::__construct();
    }
    public function index(){             
        if($_SESSION['title'] == "Patient" ){
            $userId = $_SESSION['user_id'];

            $data = [];
            $result = $this->model->getData($userId);
            $data['result'] = $result;
                    
            $this->view->render("patient/settings", $data);
        }
        if($_SESSION['title'] == "Doctor" ){
            $userId = $_SESSION['user_id'];  
        
            $data = [];
            $result = $this->model->getData($userId);
            $data['result'] = $result;

            $this->view->render("doctor/settings", $data);
        }
        if($_SESSION['title'] == "Receptionist" ){
            $userId = $_SESSION['user_id'];  
        
            $data = [];
            $result = $this->model->getData($userId);
            $data['result'] = $result;

            $this->view->render("receptionist/settings", $data);
        }
        if($_SESSION['title'] == "CLS" ){
            $userId = $_SESSION['user_id'];

            $data = [];
            $result = $this->model->getData($userId);
            $data['result'] = $result;
                    
            $this->view->render("CLS/settings", $data);
        }
    }

    public function profile(){
        $userId = $_SESSION['user_id'];
        
        $target_dir = "../public/assets/img/profile/";
        $target_file = $target_dir . basename($_FILES["imageUpload"]["name"]);
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        $filename =  $_FILES['imageUpload']['name'];
        
        move_uploaded_file($_FILES["imageUpload"]["tmp_name"], $target_file);
        //$timestamp = time();
        //$image = $doctorId . $timestamp . "." . $imageFileType; //generating an unique name to the image file
        //rename("../public/assets/img/profile/$filename", "../public/assets/img/profile/$image"); //adding the generated name to the file
        

        $update = $this->model->updateProfile($userId, $filename);
        echo "<script>alert('Profile Updated')</script>";
		echo "<script>window.location.href='index'</script>"; // ???

    }

    public function update(){                   
        $userId = $_SESSION['user_id'];
        $firstname =  $_POST['firstname'];
        $lastname =  $_POST['lastname'];
        $dob =  $_POST['dob'];
        $email =  $_POST['email'];
        $contact =  $_POST['contact'];
        //$password =  $_POST['password'];

        $update = $this->model->updateAccount($userId, $firstname, $lastname, $dob, $email, $contact);
        echo "<script>alert('Profile Updated')</script>";
		echo "<script>window.location.href='index'</script>"; // ???
        
    }
}