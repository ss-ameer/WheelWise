<?php 

    if (isset($_POST['login_submit'])) {
        echo ('Working');

        $name = $_POST['login_uid'];
        $password = $_POST['login_password'];


        if (emptyInputSignup() !== false) {

        };

        if (wrongPassword() !== false) {

        }
    }

    else {
        header('location: ../pages/login.php');
    }

?>