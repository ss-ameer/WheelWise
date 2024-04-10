<!-- handle_login.php -->
<?php

    require_once $_SERVER['DOCUMENT_ROOT'] . '/ameer/WheelWise/configs/config_main.php';

    $tableName = 'users';

    if (isset($_POST['login_submit'])) {

        $name = $_POST['login_uid'];
        $password = $_POST['login_password'];

        $result = inputCheckLogin($sql_connection, $name, $password);
        
        if ($result !== 'none') {
            header('location: '. addPage('login') . "?error=$result");
        }

        else if ($result === 'none') {
            sql_loginUser($sql_connection, $tableName, $name, $password);

            header('location: '. addPage('home'));
        }
    }

?>
<!-- /handle_login.php -->