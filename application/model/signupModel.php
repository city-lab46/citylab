<?php

class signupModel extends Model{

    function __construct() {
        parent::__construct();
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
        //Password hasing
        $password = md5($this->db->quote($password));
        $contact = $this->db->quote($contact);
    */
        $query = "INSERT INTO user ( first_name, last_name,  email, dob, contact, gender, password, username ,title ) 
                VALUES(
                    '$firstname',
                    '$lastname',
                    '$email',
                    '$dob',
                    '$contact',
                    '$gender',
                    '$password',
                    '$username',
                    '$title'
                )";
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

    public function verify($data, $pattern){
        if (preg_match($pattern, $data)) {
            return  true;
        }else{
            return false;
        }
    }
}