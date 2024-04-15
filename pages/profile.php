<!-- profile.php -->
<?php

    require_once $_SERVER['DOCUMENT_ROOT'] . '/ameer/WheelWise/configs/config_main.php';

    foreach ($_SESSION as $key => $value) { echo '<br>' . $key . ': ' . $value; }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>
    <header>
        <?php addComponent('header') ?>
    </header>

    <main class="container-md border bg-info ">
        <div class="row">
            <div class="col-8">
                <?php addComponent('card_userInfo') ?>
            </div>
            <div class="col">
                <div class="placeholder"></div>
            </div>
        </div>
    </main>
    <footer>
        <?php addComponent('footer'); ?>
    </footer>
</body>
</html>
<!-- profile.php -->