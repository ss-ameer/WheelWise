<!-- config_login.php -->
<?php 

    function login_inputCheck( $username, $password) {
        $errorType = 'none';

        if(empty($username) || empty($password)) {
            $errorType = 'emptyfield';
        } else { $errorType = 'unknown';}

        return $errorType;
    }

?>
<!-- /config_login.php -->