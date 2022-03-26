<?php

class patientModel extends Model{

    function __construct(){
        parent::__construct();
    }
    
    function getPatient($docotrId){
        $query = "SELECT * FROM user INNER JOIN patient ON user.user_id = patient.user_id INNER JOIN doctor_patient ON doctor_patient.patient_id = patient.patient_id WHERE doctor_id = '$docotrId'";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    function addPatient($firstname,$lastname,$email,$dob,$gender,$username,$password,$contact,$title){
        
        //Sanitize data
    /*    
        $firstname = $this->db->quote($firstname);
        $lastname = $this->db->quote($lastname);
        $email =$this->db->quote($email);
        $dob = $this->db->quote($dob);
        $gender = $this->db->quote($gender);
        $username = $this->db->quote($username);
    */  //Password hasing
        //$password = md5($password);
        //$contact = $this->db->quote($contact);
    
        $query = "INSERT INTO user ( first_name, last_name,  email, dob, contact, gender, password, username ,title ) 
                VALUES('$firstname', '$lastname', '$email', '$dob', '$contact', '$gender', '$password', '$username', '$title')";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $this->db->lastInsertId();
    }
    function addPatientId($userId){
        $patientId = 'P'.$userId;
        
        $query = "INSERT INTO patient ( patient_id, user_id) VALUES('$patientId','$userId')";
        $stmt = $this->db->prepare($query);
        $stmt->execute();          
    } 
    public function userNameCheck($userName){
        //$username = $this->db->quote($username);
        $query = "SELECT * FROM user WHERE username = '$userName'  LIMIT 1";
        $stmt = $this->db->prepare($query);
        $stmt->execute(); 
        return $stmt->fetchAll();
    }

    public function emailCheck($email){
        //$email = $this->db->quote($email);
        $query = "SELECT * FROM user WHERE email='$email' LIMIT 1";
        $stmt = $this->db->prepare($query);
        $stmt->execute(); 
        return $stmt->fetchAll();
    }
    public function getPatientDetails($offset, $no_of_records_per_page){
        $query = "SELECT patient.patient_id, user.first_name,user.last_name,user.contact, user.email FROM user, patient WHERE user.user_id = patient.user_id LIMIT $offset, $no_of_records_per_page";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function searchPatient($search){
        $query = "SELECT patient.patient_id, user.first_name,user.last_name,user.contact, user.email FROM user, patient WHERE user.user_id = patient.user_id
        AND (patient.patient_id LIKE '%".$search."%' 
        OR user.first_name LIKE '%".$search."%' 
        OR user.last_name LIKE '%".$search."%' 
        OR user.contact LIKE '%".$search."%'
        OR user.email LIKE '%".$search."%')";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }   
    public function getPatientByPatientId($patient_id){
        $query = "SELECT user_id FROM patient WHERE patient_id = '$patient_id'";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function updatePatient($userId,$firstname,$lastname,$email,$dob,$gender,$username,$password,$contact,$title){
        $query = "UPDATE user SET first_name= '$firstname' ,last_name= '$lastname',username='$username',contact='$contact',email = '$email',title='$title',
        dob = '$dob',gender='$gender',password='$password'  WHERE user_id = '$userId'";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
       
        return $this->db->lastInsertId(); 
    }
    public function getPatientDetailsByPatientId($patientId){
        $query = "SELECT * FROM user WHERE user_id = (SELECT user_id FROM patient WHERE patient_id = '$patientId')";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function deletePatient($patientId){
        $query = "DELETE FROM patient WHERE patient_id ='$patientId' ";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $this->db->lastInsertId();
    }
    public function getCount(){
        $query = "SELECT * FROM user WHERE title = 'Patient' ";
        $stmt = $this->db->prepare($query);
        $stmt->execute(); 
        return $count = $stmt->rowCount();
    }
    public function getData($offset, $no_of_records_per_page){
        $query = "SELECT * FROM user WHERE title = 'Patient' LIMIT $offset, $no_of_records_per_page";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
