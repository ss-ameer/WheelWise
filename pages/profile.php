<!-- profile.php -->
<?php

    require_once $_SERVER['DOCUMENT_ROOT'] . '/ameer/WheelWise/configs/config_main.php';
    $user = sql_userGet ($GLOBALS['sql_connection'], $_GET['id']);

    // foreach ($_SESSION as $key => $value) { echo '<br>' . $key . ': ' . $value; }

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

    <main class="container border bg-info">

        <div class="row">
            
            <div class="col-3">
                <div class="row">
                    <img class="img-fluid img-thumbnail rounded embed-ratio" src="https://placehold.co/150x150" alt="...">
                </div>
            </div>

            <div class="col bg-dark">
                <div class="card">
                    <div class="card-body">
                        <?php $surname = $user['user_name_middle'] !== '' ? $user['user_name_middle'] . ' ' : '' ?>
                        <div class="fw-bold"><?= $user['user_name_first'] . ' ' . $surname . $user['user_name_last'] ?></div> 
                        <?= $user['user_name'] ?>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        Bio:
                    </div>
                    <div class="card-body">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit iusto id magnam sequi ad quae tenetur sit nemo quidem magni?
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-3 bg-danger">
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Necessitatibus, sit quisquam hic assumenda asperiores nostrum omnis harum odit, facilis voluptatum beatae nobis velit voluptatibus ad distinctio iure deserunt. Asperiores quaerat animi voluptatum quod laudantium distinctio dignissimos possimus laboriosam labore! Quas praesentium eligendi autem aut, adipisci dicta corporis? Est, nesciunt cum?</p>
            </div>

        </div>

    </main>
    <footer>
        <?php addComponent('footer'); ?>
    </footer>
</body>
</html>
<!-- profile.php -->