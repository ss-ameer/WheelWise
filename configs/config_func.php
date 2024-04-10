    <!-- config_func.php -->
    <?php

        // adds a specified component
        function addComponent($component_name, $mode = 0) 
        {
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
                    echo 'ERROR: there was a problem with the code.';
                }

            } else {
                echo "ERROR: File '$component_name.php' was not found in directory.";
            }
        };

        // adds a specified configuration
        function addConfig($config_name) 
        {
            return CONFIGS_DIR[$config_name];
        }

        function addPage($page_name) 
        {
            return PAGES_DIR[$page_name];
        }
        
        // adds a specified style
        function linkStyle($style_name, $extension = '') 
        {
            $dir = $extension . STYLES_DIR[$style_name];
            echo "<link rel=\"stylesheet\" href=\"{$dir}\">"; 
        };
        
        function debug($result='') 
        {
            switch ($result) {
            case 0:
                return 'successful';
            
            case 1:
                return 'failed';

            default:
                break;
            }   
        };

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

        // checks the input data in the signup page
        function inputCheckSignUp(
            $connection,
            $username,
            $email,
            $firstname,
            $lastname, 
            $middlename,
            $dateofbirth,
            $gender,
            $password, 
            $passwordrepeat)
        
        {

            $errorType = 'none';

            if(
                empty($username) || 
                empty($email) || 
                empty($firstname) || 
                empty($lastname) || 
                empty($middlename) || 
                empty($dateofbirth) || 
                empty($gender) || 
                empty($password) || 
                empty($passwordrepeat)) 
            {
                $errorType = 'emptyfield';
            }

            else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {
                $errorType = 'invalidusername';
            }

            else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errorType = 'invalidemail';
            }

            else if ($password !== $passwordrepeat) {
                $errorType = 'passworddoesnotmatch';
            }

            else if (sql_userIdCheck($connection, 'users', $username, $email) === false) {
                $errorType = 'useridexists';
            }

            return $errorType;
        }

        function inputCheckLogin(
            $connection,
            $username,
            $password)
        {
            $errorType = 'none';

            if(empty($username) || empty($password)) {
                $errorType = 'emptyfield';
            }

            return $errorType;
        }

        function sql_createUser(
            $connection, 
            $tablename,
            $username, 
            $email, 
            $firstname, 
            $lastname, 
            $middlename, 
            $dateofbirth,
            $gender, 
            $password) 
            {
                $sql = "INSERT INTO $tablename (user_name, user_email,	user_name_first, user_name_last, user_name_middle,user_date_of_birth, user_gender, user_password) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

                $stmt = mysqli_stmt_init($connection);

                if (!mysqli_stmt_prepare($stmt, $sql)) {
                    return false;
                } 

                $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

                mysqli_stmt_bind_param($stmt, "ssssssss", $username, $email, $firstname, $lastname, $middlename, $dateofbirth, $gender, $hashedPassword);

                mysqli_stmt_execute($stmt);

                mysqli_stmt_close($stmt);
        }

        // function to login the user
        function sql_loginUser( $connection, $tablename, $userid, $password) 
        {
            
            $idCheck = sql_userIdCheck($connection,  $tablename, $userid, $userid, 'array');

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

        function sql_sessionValidityCheck($connection, $tablename) {
            if (isset($_SESSION['user_id'])) {
                $idCheck = sql_userIdCheck($connection, $tablename, $_SESSION['user_name'], $_SESSION['user_name'], 'array');
                if ($idCheck && $_SESSION['user_id'] === $idCheck["user_id"] && password_verify($_SESSION['user_password'], $idCheck['user_password'])) {
                    return true;
                }
            }
            return false;
        }
        

        function inputErrorMessage ($errormessage) 
        {
            
            if (array_key_exists($errormessage, ERROR_MESSAGES)) {
                    return ERROR_MESSAGES[$errormessage];
                }
            else {
                return "An unknown error occurred: $errormessage";
              }
        }

    ?>
    <!-- /config_func.php -->