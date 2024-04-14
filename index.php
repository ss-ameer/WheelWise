<!-- index.php -->
<?php

    require_once $_SERVER['DOCUMENT_ROOT'] . '/ameer/WheelWise/configs/config_main.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>

    <header>
        <?php addComponent('header') ?>
    </header>

    <main class = 'container'>
    
        <?php foreach(sql_userGetAll($sql_connection) as $row){
            foreach($row as $key => $data){
                echo "$data <br>";
            } echo "<br>";
        }; ?>
    </main>

    <footer>
        <?php addComponent('footer'); ?>
    </footer>
    
</body>
</html>
<!-- /index.php -->