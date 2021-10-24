<?php

class notificationModel extends Model{
    
    function __construct(){
        parent::__construct();
    }

    function statusUpdate(){
        $query = "UPDATE notification SET status = 1 WHERE status=0";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $this->db->lastInsertId();
    }

    function getNotifications(){
        $query = "SELECT * FROM notification ORDER BY notification_id DESC LIMIT 5";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    
    function getUnSeenNotifications(){
        $query = "SELECT * FROM notification WHERE status=0";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}