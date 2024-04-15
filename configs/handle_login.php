<!-- handle_login.php -->
<?php

    require_once $_SERVER['DOCUMENT_ROOT'] . '/ameer/WheelWise/configs/config_main.php';

    if (isset($_POST['login_submit'])) {
        $uid = $_POST['login_uid'];
        $password = $_POST['login_password'];
        $result = login_inputCheck($uid, $password);
        
        if ($result !== 'none') {
            header('location: '. addPage('login') . "?error=$result"); }

        else if ($result === 'none') {
            sql_loginUser($GLOBALS['sql_connection'], $uid, $password);
            header('location: '. addPage('home')); }

        else { header('location: '. addPage('login') . "?error=$result"); }
    }

?>
<!-- /handle_login.php -->