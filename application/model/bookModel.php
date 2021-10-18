<?php
require_once 'config.php' ;

class bookModel extends database{

    function getBookID($patient_id){
        //global $conn;
        $sql = "SELECT * FROM booking INNER JOIN booking_test_type ON booking.booking_id = booking_test_type.booking_id INNER JOIN test ON test.test_id = booking_test_type.test_id WHERE patient_id = '$patient_id '";
        $result = $conn->query($sql);
        return $result;
    }

    function bookInsert($date, $test_id, $patient_id){
        //global $conn;

        $query = "SELECT * FROM booking WHERE patient_id = '$patient_id '";
        $result = $conn->query($query); 
        if ($result->num_rows == 0){ // not nowCount, status is none
            $sql1 = "INSERT INTO booking (patient_id, created_date)  VALUES ('$patient_id','$date');";
            $result1 = $conn->query($sql1);

            $sql2 = "SELECT booking_id FROM booking WHERE patient_id = '$patient_id'";
            $result2 = $conn->query($sql2);
                
            foreach ($result2 as $row){
                $booking_id = $row['booking_id'];
            }
            //var_dump($booking_id);

            $sql3 = "INSERT INTO booking_test_type (booking_id, test_id)  VALUES ('$booking_id','$test_id');";
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
    }
}
        