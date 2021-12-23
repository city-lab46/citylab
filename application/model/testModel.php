<?php

class testModel extends Model{

    function __construct(){
        parent::__construct();
    }
    
    function getRecords($patientId){
        $query = "SELECT * FROM report 
            INNER JOIN report_test_type ON report.report_id = report_test_type.report_id 
            INNER JOIN test ON test.test_id = report_test_type.test_id 
            WHERE patient_id = '$patientId'";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }    
}
