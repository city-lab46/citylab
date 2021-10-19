<?php

class bookModel extends Model{
    function __construct(){
        parent::__construct();
    }

    function getBookDetails($patientID){
        $query = "SELECT * FROM booking INNER JOIN booking_test_type ON booking.booking_id = booking_test_type.booking_id INNER JOIN test ON test.test_id = booking_test_type.test_id WHERE patient_id = '$patientID '";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    function bookCount($patientId){
        $query = "SELECT * FROM booking WHERE patient_id = '$patientId '";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $count=$stmt->rowCount();
    }

    function bookInsert($patientId, $date){
        $query = "INSERT INTO booking (patient_id, created_date)  VALUES ('$patientId','$date');";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $this->db->lastInsertId();
    }

    function testInsert($testID, $bookingID){
        $query = "INSERT INTO booking_test_type (booking_id, test_id)  VALUES ('$bookingID','$testID');";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        //bind
    }

  /*  function getBookID($patientId){

        $query = "SELECT booking_id FROM booking WHERE patient_id = '$patientId'";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        return $this->db->lastInsertId();
    }
/*
    function bookInsert($patientId, $date, $testID){

        $query = "SELECT * FROM booking WHERE patient_id = '$patientId '";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        $stmt->fetch();//here >>>
        if ($result->num_rows == 0){ // not nowCount, status is none
            $sql1 = "INSERT INTO booking (patient_id, created_date)  VALUES ('$patientId','$date');";
            $result1 = $conn->query($sql1);

            $sql2 = "SELECT booking_id FROM booking WHERE patient_id = '$patientId'";
            $result2 = $conn->query($sql2);
                
            foreach ($result2 as $row){
                $booking_id = $row['booking_id'];
            }
            //var_dump($booking_id);

            $sql3 = "INSERT INTO booking_test_type (booking_id, test_id)  VALUES ('$booking_id','$testID');";
            $result3 = $conn->query($sql3);

            if ($result1 && $result3){
                echo "<script>alert('Booking Successful.')</script>";
                echo "<script>window.location.href='pay.php'</script>";
                
            }else{
                echo "<script>alert('Booking Failed.')</script>";
                echo "<script>window.location.href='book.php'</script>";
            }

        }else{
            echo "<script>alert('Already Placed Booking.')</script>";
            echo "<script>window.location.href='book.php'</script>";
        }

        
    }

    function bookCancel($id){
        //global $conn;
        $sql = "DELETE FROM booking WHERE booking_id = '$id'";
        $result = $conn->query($sql);

        if ($result){
            echo "<script>alert('Booking Canceled.')</script>";
            echo "<script>window.location.href='book.php'</script>";
        }else{
            echo "<script>alert('Booking Cancel Failed.')</script>";
            echo "<script>window.location.href='book.php'</script>";
        }
    }*/
}
        