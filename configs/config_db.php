<!-- config_db.php -->
<?php

    global $sql_connection;

    $server = 'localhost';
    $db_user = 'root';
    $db_password = '';
    $db_name = 'wheelwise_db';

    $sql_connection = mysqli_connect($server, $db_user, $db_password, $db_name);

    // if (!$sql_connection) {
    //     die("Connection Failed: " . mysqli_connect_error());
    // } else {
    //     echo 'Connection successful';
    // }

?>
<!-- /config_db.php -->