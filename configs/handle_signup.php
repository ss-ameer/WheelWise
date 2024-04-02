<?php 

    if (isset($_POST["submit"])) {

        $username = $_POST["signup_name"];
        $email = $_POST["signup_email"];
        $password = $_POST["signup_password"];
        $passwordRepeat = $_POST["signup_password-repeat"];

    }
    else {
        
        header('location: ../pages/signup.php');

    }

?>