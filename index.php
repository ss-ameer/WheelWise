<!-- index.php -->
<?php

    require_once $_SERVER['DOCUMENT_ROOT'] . '/ameer/WheelWise/configs/config_main.php';

    linkStyle('main');

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

    <main>
        <?php 
            if (isset($_SESSION['user_id'])) {
                echo "it is set!";
            } else if (!isset($_SESSION['user_id']) ) {
                echo "it is not set!";
            } else { echo "unknown error";}
        ?>
    </main>

    <footer>
        <?php addComponent('footer') ?>
    </footer>

</body>
</html>
<!-- /index.php -->