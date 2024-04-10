<!-- handle_signup.php -->
<?php   

    require_once $_SERVER['DOCUMENT_ROOT'] . '/ameer/capstone_project/configs/config_main.php';

    $tableName = 'users';
    

    if (isset($_POST['signup_submit'])) {

        $nameUser = $_POST["signup_name-user"];
        $nameFirst = $_POST['signup_name-first'];
        $nameLast = $_POST['signup_name-last'];
        $nameMiddle = $_POST['signup_name-middle'];
        $gender = $_POST['signup_gender'];
        $dateOfBirth = $_POST['signup_dateOfBirth'];
        $email = $_POST["signup_email"];
        $password = $_POST["signup_password"];
        $passwordRepeat = $_POST["signup_password-repeat"];

        $result = inputCheckSignUp(
            $sql_connection,
            $nameUser, 
            $email, 
            $nameFirst, 
            $nameLast, 
            $nameMiddle,
            $dateOfBirth,
            $gender, 
            $password, 
            $passwordRepeat
        );
        

        if ( $result !== 'none') 
        {
            header("location: " . addPage('signup') . "?error=$result");
            exit(); 
        }

        else if ( $result === 'none')
        {    
            sql_createUser(
            $sql_connection,
            $tableName,
            $nameUser, 
            $email, 
            $nameFirst, 
            $nameLast, 
            $nameMiddle,
            $dateOfBirth,
            $gender, 
            $password);

            header("location: " . addPage('signup') . "?error=$result");
            exit();
        }

    };
        

?>
<!-- /handle_signup.php -->