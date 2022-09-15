<?php
session_start();
//importing the database connection file
require_once '../server/config/dbconfig.php';
//error constant to avoid repetition
define('REQUIRED_FIELD_ERROR', 'This field is required');
$errors = [];


$firstname = "";
$lastname = "";
$email = "";
$password = "";
$passwordRe = "";

if (isset($_POST['register'])) {
    $firstname = mysqli_escape_string($con, $_POST['firstname']);
    $lastname = mysqli_escape_string($con, $_POST['lastname']);
    $email = mysqli_escape_string($con, $_POST['email']);
    $password = mysqli_escape_string($con, $_POST['password']);
    $passwordRe = mysqli_real_escape_string($con, $_POST['passwordRe']);


    //empty field check
    if (!$firstname) {
        $errors['firstname'] = REQUIRED_FIELD_ERROR;
    }
    if (!$lastname) {
        $errors['lastname'] = REQUIRED_FIELD_ERROR;
    }
    if (!$firstname) {
        $errors['email'] = REQUIRED_FIELD_ERROR;
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "This field must be of valid email address";
    }
    if (!$password) {
        $errors['password'] = REQUIRED_FIELD_ERROR;
    }
    if ($passwordRe !== $password) {
        $errors['passwordRe'] = "Confirmatory password must match password field";
    }

    //checking for the existence of data in the database
    $userQuery = "SELECT * FROM Users WHERE EMAIL_ADDRESS = ? LIMIT 1";
    $stmt = $con->prepare($userQuery);
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $userCount = $result->num_rows;
    $stmt->close();
    if ($userCount > 0) {
        $errors['email'] = "Email already exists";

        // if ($userCount > 0) {
        //     $errors['email'] = "Email already exists";
        // }
    }

    if (count($errors) == 0) {
        $password = password_hash($password, PASSWORD_DEFAULT);
        // $token = bin2hex(random_bytes(50));
        // $verified = false;
        // $status = 'open';

        $sql = "INSERT INTO Users (FIRSTNAME, LASTNAME, EMAIL_ADDRESS, `PASSWORD`) VALUES (?,?,?,?)";
        $stmt = $con->prepare($sql);
        $stmt->bind_param('ssss', $firstname, $lastname, $email, $password);

        if ($stmt->execute()) {
            //performig an auto login task so long the users data is valid
            $user_id = $con->insert_id;
            $_SESSION['ID'] = $user_id;
            $_SESSION['EMAIL'] = $email;

            //flash message
            // $_SESSION['message'] = "you are now logged in!";
            // $_SESSION['alert-class'] = "alert-success ";
            header('location: dashboard.php');
            exit();
        } else {
            $errors['db_error'] = "Database error: failed";
        }
    }
}


if (isset($_POST['login'])) {
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    //validation
    //checking if any of the input boxes were submitted with empty input
    if (!$email) {
        $errors['email'] = REQUIRED_FIELD_ERROR;
    }
    if (!$password) {
        $errors['password'] = REQUIRED_FIELD_ERROR;
    }

    if (count($errors) == 0) {
        $sql = "SELECT * FROM Users  WHERE EMAIL_ADDRESS =? LIMIT 1";
        $stmt = $con->prepare($sql);
        $stmt->bind_param('s', $email);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();

        if ($user) {
            if ((password_verify($password, $user['PASSWORD']))) {
                //login sucess i.e the user is logged in sucessfully
                $_SESSION['id'] = $user['ID'];
                $_SESSION['email'] = $user['EMAIL_ADDRESS'];
                //flash message
                //  $_SESSION['message'] = "you are now logged in!";
                //  $_SESSION['alert-class'] = "alert-success ";
                header('location: dashboard.php');
                exit();
            }
            if ($password !== $user['PASSWORD']) {
                $errors['password'] = 'The provided password is not valid';
            }

            if ($email !== $user['EMAIL_ADDRESS']) {
                $errors['email'] = 'The provided email address is not valid';
            }
        } else {
            $errors['db_error'] = "Database error: failed";
        }
    }
}

if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['id']);
    unset($_SESSION['email']);
    header('location: sign-in.php');
    exit();
}
