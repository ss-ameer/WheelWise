<!-- login.php -->
<?php 

    include_once $_SERVER['DOCUMENT_ROOT'] . "/ameer/capstone_project/configs/config_main.php";

    addStyle('main', '../')

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

    <header>
        <?php addComponent('header'); ?>
    </header>

    <main>

        <form action='<?php addConfig('handle_login') ?>' method='POST'>
            <input name='login_name' type='text' placeholder='Username/Email'/>
            <input type='password' name='login_password' placeholder='Password'>
            <input type='submit' name='login_submit' value='submit'>
        </form>

    </main>

    <footer>
        <?php addComponent('footer'); ?>
    </footer>

</body>
</html>
<!-- /login.php -->