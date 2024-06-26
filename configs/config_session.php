<!-- config_session.php -->
<?php
    session_start();

    function session_setUser($array) {

        if($array['user_type'] === 1 ? $array['user_type'] = 'admin' : $array['user_type'] = 'regular');

        $_SESSION["user_id"] = $array['user_id'];
        $_SESSION["user_name"] = $array['user_name'];
        $_SESSION["user_nameFirst"] = $array['user_name_first'];
        $_SESSION["user_nameLast"] = $array['user_name_last'];
        $_SESSION["user_nameMiddle"] = $array['user_name_middle'];
        $_SESSION["user_addressProvince"] = $array['user_address_province'];
        $_SESSION["user_addressMunicipality"] = $array['user_address_municipality'];
        $_SESSION["user_dateOfBirth"] = $array['user_date_of_birth'];
        $_SESSION["user_gender"] = $array['user_gender'];
        $_SESSION["user_password"] = $array['user_password'];
        $_SESSION["user_type"] = $array['user_type'];
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
            case 'province':
                $info = $_SESSION["user_addressProvince"];
                break;
            case 'municipality':
                $info = $_SESSION["user_addressMunicipality"];
                break;
            case 'dob':
                $info = $_SESSION["user_dateOfBirth"];
                break;
            case 'gender':
                $info = $_SESSION["user_gender"];
                break;
            case 'type':
                $info = $_SESSION["user_type"];
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

            default:
                $info = 'Unknown info: ' . $infoname;
                break;
        }

        return $info;

    }

    // checks if the user's session is still valid.
    function session_userCheck($connection) {
        if (isset($_SESSION['user_id'])) {
            $idCheck = sql_userCheckId($connection, $_SESSION['user_name'], $_SESSION['user_name']);
            $user = sql_userGet($GLOBALS['sql_connection'], $idCheck);

            if ($idCheck && $_SESSION['user_id'] === $idCheck && password_verify($_SESSION['user_password'], $user['user_password'])) {
                return true; }

        } else { return false; }
    }

?>
<!-- /config_session.php -->