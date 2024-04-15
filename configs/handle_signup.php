<!-- handle_signup.php -->
<?php   

    require_once $_SERVER['DOCUMENT_ROOT'] . '/ameer/WheelWise/configs/config_main.php';

    // checks the input data in the signup page
    function signup_inputCheck( $connection, $username, $email, $firstname, $lastname, $middlename, $province, $municipality, $dateofbirth, $gender, $password, $passwordrepeat) {

        $errorType = 'unknown';

        if( empty($username) || 
            empty($email) || 
            empty($firstname) || 
            empty($lastname) || 
            empty($province) ||
            empty($municipality) || 
            empty($dateofbirth) || 
            empty($gender) || 
            empty($password) || 
            empty($passwordrepeat)) {
            $errorType = 'emptyfield'; }

        if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
            $errorType = 'invalidusername'; }

        else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errorType = 'invalidemail'; }

        else if ($password !== $passwordrepeat) {
            $errorType = 'passworddoesnotmatch'; }

        else if (sql_userCheckId($connection, $username, $email !== false)) {
            $errorType = 'useridexists'; }

        else { $errorType = 'none'; }

        return $errorType;
    }

    if (isset($_POST['signup_submit'])) {

        $nameUser = $_POST['signup_name-user'];
        $nameFirst = ucwords($_POST['signup_name-first']);
        $nameLast = ucwords($_POST['signup_name-last']);
        $nameMiddle = ucwords($_POST['signup_name-middle']);
        $addressProvince = $_POST['signup_address-province'];
        $addressMunicipality = $_POST['signup_address-municipality'];
        $dateOfBirth = $_POST['signup_dateOfBirth'];
        $gender = $_POST['signup_gender'];
        $email = $_POST["signup_email"];
        $password = $_POST["signup_password"];
        $passwordRepeat = $_POST["signup_password-repeat"];

        $result = signup_inputCheck(
            $GLOBALS['sql_connection'],
            $nameUser, 
            $email, 
            $nameFirst, 
            $nameLast, 
            $nameMiddle,
            $addressProvince,
            $addressMunicipality,
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
                $nameUser,
                $email,
                $nameFirst,
                $nameLast,
                $nameMiddle,
                $addressProvince,
                $addressMunicipality,
                $dateOfBirth,
                $gender,
                $password);

            header("location: " . addPage('signup') . "?error=$result");
            exit();
        }

    };

    header("location: " . addPage('signup') . "?error=invalidaccess");
    exit();
        

?>
<!-- /handle_signup.php -->