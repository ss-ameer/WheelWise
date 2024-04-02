<!-- index.php -->
<?php

    include_once $_SERVER['DOCUMENT_ROOT'] . '/ameer/capstone_project/configs/config_main.php';

    addStyle('main');

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

    </main>

    <footer>
        <?php addComponent('footer') ?>
    </footer>

</body>
</html>
<!-- /index.php -->