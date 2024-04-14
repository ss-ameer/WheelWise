<!-- profile.php -->
<?php

    require_once $_SERVER['DOCUMENT_ROOT'] . '/ameer/WheelWise/configs/config_main.php';

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
            <section class="col-6 rounded bg-light">
                <ul>
                    <li><?= session_getInfo('name') ?></li>
                    <li><?= session_getInfo('full') ?></li>
                    <li><?= session_getInfo('age') ?></li>
                    <li><?= session_getInfo('province') ?></li>
                    <li><?= session_getInfo('municipality') ?></li>
                    <li><?= session_getInfo('type') ?></li>
                </ul>
            </section>
            <section class="col-3 rounded bg-dark">
                tangina mo gago
            </section>
        </div>
        <br>
        <div class="row g-4 bg-light">
            <div class="col bg-warning">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Non officia, natus illo eligendi perspiciatis distinctio nihil aut provident debitis totam.
            </div>
            <div class="col bg-danger">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Non officia, natus illo eligendi perspiciatis distinctio nihil aut provident debitis totam.
            </div>
        </div>
    </main>
    <footer>
        <?php addComponent('footer'); ?>
    </footer>
</body>
</html>
<!-- profile.php -->