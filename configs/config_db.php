<!-- config_db.php -->
<?php

    global $sql_connection;

    $server = 'localhost';
    $db_user = 'root';
    $db_password = '';
    $db_name = 'wheelwise_db';

    $sql_connection = mysqli_connect($server, $db_user, $db_password, $db_name);

    // connection debug.
    function sql_connectionDebug($connection) {
        if (!$connection) {
            die("Connection Failed: " . mysqli_connect_error());
        } else {
            echo 'Connection successful';
        }
    }

    // checks if a user's username or email address is already in use in a database.
    function sql_userIdCheck($connection,  $tablename, $username, $email, $returntype = 'bool') {
        $sql = "SELECT * FROM $tablename WHERE user_name = ? OR user_email = ?;";
        $stmt = mysqli_stmt_init($connection);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            return false;
        } 

        mysqli_stmt_bind_param($stmt, "ss", $username, $email);
        mysqli_stmt_execute($stmt);

        $resultData = mysqli_stmt_get_result($stmt);

        if ($row = mysqli_fetch_assoc($resultData)) {
            if ($returntype == 'array') {
                return $row;
            }

            else return false;
        }

        mysqli_stmt_close($stmt);
    }

    // creates a new user in a database.
    function sql_createUser(
        $connection,
         $tablename,
          $username,
           $email,
            $firstname,
             $lastname,
              $middlename,
               $province,
                $municipality,
                 $dateofbirth,
                  $gender,
                   $password) 

        {
            $sql = "INSERT INTO $tablename (
                user_name, user_email,
                 user_name_first,
                  user_name_last,
                   user_name_middle,
                    user_address_province,
                     user_address_municipality,
                      user_date_of_birth,
                       user_gender,
                        user_password)
                         VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

            $stmt = mysqli_stmt_init($connection);

            if (!mysqli_stmt_prepare($stmt, $sql)) {
                return false;
            } 

            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            mysqli_stmt_bind_param($stmt, "ssssssssss",
             $username,
              $email,
               $firstname,
                $lastname,
                 $middlename,
                  $province,
                   $municipality,
                     $dateofbirth,
                      $gender,
                       $hashedPassword);

            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
    }

    // checks if a user's login credentials are valid.
    function sql_loginUser( $connection, $tablename, $userid, $password) 
        {
            $idCheck = sql_userIdCheck($connection, $tablename, $userid, $userid, 'array');

            if ($idCheck == false) {
                
                header("Location: " . addPage('login') . "?error=wronguid");
                exit();
            }

            $passwordHashed = $idCheck['user_password'];
            $passwordCheck = password_verify($password, $passwordHashed);

            if ($passwordCheck === false) {
                header("Location: " . addPage('login') . "?error=wrongpassword");
                exit();
            }
            else if ($passwordCheck === true) {
                
                session_setUser($idCheck);
                
                header("Location: " . addPage('home'));
            }
        }

        // checks if the user's session is still valid.
        function sql_sessionValidityCheck($connection, $tablename) {
            if (isset($_SESSION['user_id'])) {
                $idCheck = sql_userIdCheck($connection, $tablename, $_SESSION['user_name'], $_SESSION['user_name'], 'array');
                if ($idCheck && $_SESSION['user_id'] === $idCheck["user_id"] && password_verify($_SESSION['user_password'], $idCheck['user_password'])) {
                    return true;
                }
            }
            return false;
        }

?>
<!-- /config_db.php -->