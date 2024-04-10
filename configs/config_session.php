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
?>
<!-- /config_session.php -->