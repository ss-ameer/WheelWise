<!-- config_func.php -->
<?php

    // adds a specified component
    function addComponent($component_name, $mode = 0) {
        $dir = COMPONENTS_DIR[$component_name];
        
        if (file_exists($dir)) {
            switch ($mode) {
            case 0:
                include($dir);
                break;
            case 1:
                include_once($dir);
                break;
            default:
                echo 'ERROR: there was a problem with the code.'; }
        } else { echo "ERROR: File '$component_name.php' was not found in directory."; }
    }

    // adds a specified configuration
    function addConfig($config_name) {
        return CONFIGS_DIR[$config_name];
    }

    function addPage($page_name) {
        return PAGES_DIR[$page_name];
    }

    // adds a specified style
    function linkStyle($stylename, $extension = '') {
        $dir = $extension . STYLES_DIR[$stylename];
        echo "<link rel=\"stylesheet\" href=\"{$dir}\">"; 
    };

    function linkScript($scriptname, $extension = '') {
        $dir = $extension . SCRIPTS_DIR[$scriptname];
        echo "<script src=\"{$dir}></script>\"";
    }

    function debug($result='') {
        switch ($result) {
        case 0:
            return 'successful';        
        case 1:
            return 'failed';
        default:
            break; }
    }

    // checks the input data in the signup page
    function inputCheckSignUp( $connection, $username, $email, $firstname, $lastname, $middlename, $province, $municipality, $dateofbirth, $gender, $password, $passwordrepeat) {

        $errorType = 'none';

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

        else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
            $errorType = 'invalidusername'; }

        else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errorType = 'invalidemail'; }

        else if ($password !== $passwordrepeat) {
            $errorType = 'passworddoesnotmatch'; }

        else if (sql_userIdCheck($connection, 'users', $username, $email) === false) {
            $errorType = 'useridexists'; }

        return $errorType;
    }

    // used to retrieve an error message based on the error type.
    function inputErrorMessage ($errormessage) {
        if (array_key_exists($errormessage, ERROR_MESSAGES)) {
                return ERROR_MESSAGES[$errormessage]; }
        else { return "An unknown error occurred: $errormessage"; }
    }

    // used to retrieve an error message based on the error type.
    function getErrorMessage ($error) {
        if ($error !== 'none') {
            $message = inputErrorMessage($error); } 
        else if ($error === 'none') {
            $message = 'you are now signed up!'; }

            return $message;
    }

?>
<!-- /config_func.php -->