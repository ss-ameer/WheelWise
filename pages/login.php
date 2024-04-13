<!-- login.php -->
<?php 

    include_once $_SERVER['DOCUMENT_ROOT'] . "/ameer/WheelWise/configs/config_main.php";

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

        <form action='../configs/handle_login.php' name='login' method='POST'>
            <input type='text' name='login_uid' placeholder='Username/Email'/>
            <input type='password' name='login_password' placeholder='Password'>
            <input type='submit' name='login_submit' value='log in'>
        </form>
        <?php 
 
         if (isset($_GET['error'])) {
            if ($_GET['error'] !== 'none') {
               $message = inputErrorMessage($_GET['error']);
            }
            
            echo (ucfirst($message));
            
         }

      ?>

    </main>

    <footer>
        <?php addComponent('footer'); ?>
    </footer>

</body>
</html>
<!-- /login.php -->