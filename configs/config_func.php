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
    function linkStyle($stylename) {
        $dir = STYLES_DIR[$stylename];
        echo "<link rel=\"stylesheet\" href=\"{$dir}\">"; 
    };

    function linkScript($scriptname) {
        $dir = SCRIPTS_DIR[$scriptname];
        echo "<script src=\"{$dir}\"></script>";
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