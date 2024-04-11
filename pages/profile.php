<!-- profile.php -->
<?php

    require_once $_SERVER['DOCUMENT_ROOT'] . '/ameer/WheelWise/configs/config_main.php';
    addComponent('header');

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

    </header>
    <main>
        <section>
            <ul>
                <li><?= session_getInfo('name') ?></li>
                <li><?= session_getInfo('full') ?></li>
                <li><?= session_getInfo('age') ?></li>
            </ul>
        </section>
    </main>
    <footer>

    </footer>
    
</body>
</html>
<!-- profile.php -->