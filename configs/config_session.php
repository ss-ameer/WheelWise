<!-- config_session.php -->
<?php
    session_start();

    function session_setUser($array) {
        $_SESSION["user_id"] = $array['user_id'];
        $_SESSION["user_name"] = $array['user_name'];
        $_SESSION["user_nameFirst"] = $array['user_name_first'];
        $_SESSION["user_nameLast"] = $array['user_name_last'];
        $_SESSION["user_nameMiddle"] = $array['user_name_middle'];
        $_SESSION["user_dateOfBirth"] = $array['user_date_of_birth'];
        $_SESSION["user_gender"] = $array['user_gender'];
        $_SESSION["user_password"] = $array['user_password'];
    }

    function session_getInfo($infoname) {

        $info = '';
        switch ($infoname) {
            case 'id':
                $info = $_SESSION["user_id"];
                break;
            case 'name':
                $info = $_SESSION["user_name"];
                break;
            case 'first':
                $info = $_SESSION["user_nameFirst"];
                break;
            case 'last':
                $info = $_SESSION["user_nameLast"];
                break;
            case 'middle':
                $info = $_SESSION["user_nameMiddle"];
                break;
            case 'dob':
                $info = $_SESSION["user_dateOfBirth"];
                break;
            case 'gender':
                $info = $_SESSION["user_gender"];
                break;
            
            case 'age':
                $birthDate = explode("-", $_SESSION["user_dateOfBirth"]);
                $birthYear = (int)$birthDate[0];
                $today = new DateTime();
                $currentYear = $today->format('Y');
                $info = $currentYear - $birthYear;
                break;
            case 'full':
                $info = $_SESSION["user_nameLast"] . ', ' . $_SESSION["user_nameFirst"] . ', ' . $info = $_SESSION["user_nameMiddle"];
                break;
        }

        return $info;

    }
?>
<!-- /config_session.php -->