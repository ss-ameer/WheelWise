<?php

    // GLOBAL VARIABLES:

    define('GLOBAL_PREFIX', 'GLOBAL_');

    define(GLOBAL_PREFIX . 'PROJ_TITLE', "Wheelwise");
    define(GLOBAL_PREFIX . 'PROJ_SUBTITLE', "car rental solution");
    define(GLOBAL_PREFIX . 'YEAR', date('Y'));

    define(GLOBAL_PREFIX . 'PATH', [
        'default-header' => './modules/_default-header.php',
        'default-footer' => './modules/_default-footer.php',
        'navigation' => './modules/_navigation.php',
        'style' => './styles/style.css'
    ]);
    
    define(GLOBAL_PREFIX . 'MEMBERS_ARR', ['front' => 'Syed Ameer Sibuma']);

    // FUNCTIONS:

    function path ($path) {
        return GLOBAL_PATH[$path];
    }
    
    function link_style () {
        echo '<link rel="stylesheet" href="'. GLOBAL_PATH["style"] . '">';
    }

    function includer ($include, $mode = 0) {
        switch ($mode) {
            case 0:
                include path($include);
                // echo "included with 0";
                break;
            case 1:
                include_once path($include);
                // echo "included with 1";
                break;
            default:
                echo 'ERROR: there was an problem with the code, try checking your function arguments.';
                break;
        }
        
    }

    function(){}
?>