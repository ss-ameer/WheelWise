<!-- handle_logout.php -->
<?php

    require_once $_SERVER['DOCUMENT_ROOT'] . '/ameer/WheelWise/configs/config_main.php';

    session_start();
    session_unset();
    session_destroy();

    header("Location: " . addPage('home') . "?logged_out=true");

?>
<!-- /handle_logout.php -->