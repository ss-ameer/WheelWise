<!-- config_path.php -->
<?php

    // base path
    define('BASE_PATH', $_SERVER['DOCUMENT_ROOT'] . '/ameer/capstone_project/');

    //base URL
    define('BASE_URL', 'http://localhost/ameer/capstone_project/');

    // prefixes
    define('DIR_PREFIX', 
    [

        'components' => BASE_PATH . 'components/',
        'configs' => BASE_PATH . 'configs/',
        'pages' => BASE_URL . 'pages/',
        'styles' => 'styles/'

    ]);

    // pages directory
    define('PAGES_DIR', 
    [

        'home' => BASE_URL . '/index.php',
        'login' => DIR_PREFIX['pages'] . 'login.php',
        'signup' => DIR_PREFIX['pages'] . 'signup.php'

    ]);

    // configuration directories
    define('CONFIGS_DIR', 
    [

        'handle_login' => "{DIR_PREFIX['configs']}handle_login.php",
        'handle_signup' => "{DIR_PREFIX['configs']}handle_signup.php"

    ]);

    // styles directories
    define('STYLES_DIR', 
    [

        'main' => DIR_PREFIX['styles'] . 'style.css'

    ]);

    // components directory
    define('COMPONENTS_DIR', 
    [

        'header' => DIR_PREFIX['components'] .'header.php',
        'footer' => DIR_PREFIX['components'] .'footer.php'

    ]);

?>
<!-- /config_path.php -->