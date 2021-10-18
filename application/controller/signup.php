<?php
session_start();

require_once '../config.php';

if (isset($_POST['submit'])) {

    //Collect data

    $firstname = $_POST['fisrtname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirmPassword'];
    $contact = $_POST['contact'];
    $title = "Patient";

    //Verify data
    $errors = [];

    if (!verify($email, "/^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$/")) array_push($errors, "Input valid email address");
    if (!verify($password, "/^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[A-Z])(?=\S*[\d])\S*$/")) array_push($errors, "Password must be strong");
    if (!verify($contact, "/^[0-9]+$/")) array_push($errors, "Must only have numbers");
    if ($password != $confirmPassword) array_push($errors, "Passwords does not match");

    if (!empty($errors)) {
        $_SESSION['signup-errors'] = $errors;
        header("Location: ../views/signup.php");
        die();
    }

    //Sanitize data
    $firstname = $conn->real_escape_string($firstname);
    $lastname = $conn->real_escape_string($lastname);
    $email = $conn->real_escape_string($email);
    $dob = $conn->real_escape_string($dob);
    $contact = $conn->real_escape_string($contact);
    $gender = $conn->real_escape_string($gender);
    $username = $conn->real_escape_string($username);
    //Password hasing
    $password = md5($conn->real_escape_string($password));

    //Insert into Database
    $sql = "INSERT INTO user ( firstname, lastname,  email, dob, contact, gender, password, username ,title ) 
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

    /*$sql2 = "INSERT INTO patient ( patient_id, user_id)
        VALUES(
            'P'+'$user_id',
            '$user_id'  //how to get this??
        )";*/

    if ($conn->query($sql)) {
        $_SESSION['signup-message'] = "User created Succesfully";
        header("Location: ../views/login.php");
        die();
    } else {
        $_SESSION['signup-errors'][0] = "Database error. Try again later.";
        header("Location: ../views/signup.php");
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