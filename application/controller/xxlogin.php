<?php
session_start();

require_once '../config.php';

if (isset($_POST['login'])) {

    //Collect data

    $username = $_POST['username'];
    $password = $_POST['password'];

    //Verify data
    /*
    $errors = [];

    if (!verify($email, "/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/")) array_push($errors, "Input valid email address");

    if (!empty($errors)) {
        $_SESSION['login-errors'] = $errors;
        header("Location: ../views/login.php");
        die();
    }*/

    //Sanitize data
    //$username = $conn->real_escape_string($username);
    //Password hasing
    //$password = md5($conn->real_escape_string($password));

    //Select in Database
    $sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);
    if ($result->num_rows == 1) {

        $resultSet = $result->fetch_assoc();

        $_SESSION['login-message'] = "Login Succesful";
        $_SESSION['login'] = true;
        $_SESSION['user_id'] = $resultSet['user_id'];
        $_SESSION['first_name'] = $resultSet['first_name'];
        $_SESSION['last_name'] = $resultSet['last_name'];
        $_SESSION['username'] = $resultSet['username'];
        $_SESSION['contact'] = $resultSet['contact'];
        $_SESSION['email'] = $resultSet['email'];
        $_SESSION['title'] = $resultSet['title'];
        $_SESSION['dob'] = $resultSet['dob'];
        $_SESSION['gender'] = $resultSet['gender'];

        if($_SESSION['title'] == "Patient" ){
            header("Location: ../Patient/home_articles.php");
            die();
        }
        else if($_SESSION['title'] == "Doctor" ){
            header("Location: ../Patient/test.html");
            die();
        }
        else if($_SESSION['title'] == "CLS" ){
            header("Location: cls-home-page.php");
            die();
        }
        else if($_SESSION['title'] == "Receptionist" ){
            header("Location: receptionist-home-page.php");
            die();
        }
        else if($_SESSION['title'] == "Admin" ){
            header("Location: admin-home-page.php");
            die();
        }
    
    } else {
        $_SESSION['login-errors'][0] = "Invalid Username or password";
        header("Location: ../views/login.php");
        die();
    }
} else {
    echo "Invalid request";
}

function verify($data, $pattern)
{
    if (preg_match($pattern, $data)) return  true;
    return false;
}