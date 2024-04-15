<!-- handle_search.php -->
<?php

    require_once $_SERVER['DOCUMENT_ROOT'] . '/ameer/WheelWise/configs/config_main.php';

    if(isset($_POST['search_submit'])) {
        $input = $_POST['search_input'];

        $idCheck = sql_userCheckId($GLOBALS['sql_connection'], $input, $input);

        if ($idCheck !== false) {
            $user = sql_userGet($GLOBALS['sql_connection'], $idCheck);

            foreach ($user as $key => $value) {
                echo '<p>'. $key. ': '. $value. '</p>';
            }
        }
    }

?>
<!-- /handle_search.php -->