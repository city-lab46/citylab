<?php
    class chatModel extends Model{
        function __construct(){
            parent::__construct();
        }
    
        public function send($message,$sender,$receiver,$date,$time){
            $query = "INSERT INTO chat VALUES('$receiver', '$sender', '$date','$time','$message')";
            $stmt = $this->db->prepare($query);
            $stmt->execute();
            //bind
        }
        public function getChat($sender,$receiver){
            $query = "SELECT * FROM chat WHERE (sender='$sender' AND receiver='$receiver') OR (sender='$receiver' AND receiver='$sender')";
            $stmt = $this->db->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll();
        }
        public function getDetails($receiver){
            $query = "SELECT * FROM user WHERE user_id = '$receiver' LIMIT 1";
            $stmt = $this->db->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll();
        }
        /*public function getStatus($receiver){
            $query = "SELECT * FROM user_online WHERE user_id='$receiver' LIMIT 1";
            $stmt = $this->db->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll();
        }*/
    }
?>