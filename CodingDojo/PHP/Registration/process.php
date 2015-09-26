<?php
session_start();


if(isset($_POST['action']) && $_POST['action'] == 'register') {
        $errors = array();
    if(empty($_POST['email'])) {
        $errors[] = "Email cannot be blank";
    }
    if(preg_match('#[0-9]#', $_POST['first_name']) || preg_match('#[0-9]#', $_POST['last_name'])) {
        $errors[] = "Names cannot contain special characters or numbers.";
    }
    if(empty($_POST['first_name'])) {
        $errors[] = "First name cannot be blank";
    }
    if(empty($_POST['last_name'])) {
        $errors[] = "Last name cannot be blank";
    }
    if(empty($_POST['password'])) {
        $errors[] = "Password cannot be blank";
    }
    if($_POST['password'] != ($_POST['confirm_password'])) {
        $errors[] = "Passwords must match";
    }
    if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL) === true) {
        $errors[] = "Invalid email";
    }
}

if (count($errors) > 0) {
$_SESSION['errors'] = $errors;
header("Location: registration.php");
die();
} else {
    $_SESSION['success'] = "Your information was valid!";
}
?>