<?php

class inventoryModel extends Model{
    function __construct(){
        parent::__construct();
    }
    function inventoryInsert($name, $count,  $updated_date,$emp_id){
        
        $query = "UPDATE inventory SET updated_date = '$updated_date',count = '$count',emp_id='$emp_id' WHERE name = '$name'";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
       
        return $this->db->lastInsertId();

    }
    function getInventoryId($name){
        $query = "SELECT  inventory_id FROM inventory WHERE name = '$name' ";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    function inventoryClsInventory($emp_id, $id){
        
        $query = "INSERT INTO inventory_cls (inventory_id,emp_id)  VALUES ('$id','$emp_id');";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        
        return $this->db->lastInsertId();
    }
    function getInventoryCount($name){
        $query = "SELECT count FROM inventory WHERE name = '$name' ";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    function getEmployeeId($user_id){
        $query = "SELECT emp_id FROM employee WHERE user_id = '$user_id' ";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        
        return $stmt->fetchAll();
    }
    function getinventoryDetails(){
        $query = "SELECT inventory_id, name, count FROM inventory ";
        $stmt = $this->db->prepare($query);
        $stmt->execute();   
        return $stmt->fetchAll();
    }
}