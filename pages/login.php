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

    <main class="vh-100">
        <div class="container w-50 mt-5 py-3 px-5 rounded shadow">
            <div class="h3 text-center pb-3" style="color: #48466d;">Log In</div>
            <form class="row g-2" action='../configs/handle_login.php' name='login' method='POST'>
                <div class="col-12">
                    <label class ="form-label" for="login_name-user">Username/Email:</label>
                    <input class="form-control" type='text' name='login_uid' placeholder='Username/Email'/>
                </div>
                <div class="col-12">
                    <label class ="form-label" for="login_name-user">Password:</label>
                    <input class="form-control" type='password' name='login_password' placeholder='Password'>
                </div>
                <div class="col-6">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" name="" id="login_check-remember">
                        <label for="login_check-remember" class="form-check-label">Remember me.</label>
                    </div>
                </div>
                <div class="col-6 text-end">
                    <a class="" href="#">Forgot your email/username?</a><br>
                    <a class="" href="#">Forgot your password?</a>
                </div>
                <div class="col">
                    <input class="form-control mt-3 btn fw-bold" style="background: #78c7e0; color: white;" type='submit' name='login_submit' value='Log In'>
                </div>
            </form>
        </div>

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