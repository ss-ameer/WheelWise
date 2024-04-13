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
        <p>
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Tempore officiis quibusdam culpa quisquam nobis mollitia sint odit perspiciatis laboriosam? Sunt. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Consectetur temporibus nostrum amet officia perferendis non dolor ab, molestias, quod est sapiente corrupti fuga placeat consequuntur, perspiciatis quaerat esse nesciunt eum voluptate quis neque. Odit sint explicabo autem earum corrupti quis?
        </p>
    </main>

    <footer>
        <?php addComponent('footer'); ?>
    </footer>
    
</body>
</html>
<!-- /index.php -->