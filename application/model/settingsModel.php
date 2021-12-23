<?php

class settingsModel extends Model{

    function __construct()
    {
        parent::__construct();
    }
    
    function getData($userId){
        $query = "SELECT * from user WHERE user_id ='$userId'";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetch();
    }    

    function updateProfile($userId, $filename){
        $query = "UPDATE user SET image = '$filename' WHERE user_id = '$userId'";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
    } 

    function updateAccount($userId, $firstname, $lastname, $dob, $email, $contact){
        $query = "UPDATE user SET 
                    first_name = '$firstname',
                    last_name = '$lastname',
                    dob = '$dob',
                    email = '$email',
                    contact = '$contact'
                WHERE user_id = '$userId'";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
    } 
}