<!-- config_path.php -->
<?php

    // base path
    define('BASE_PATH', $_SERVER['DOCUMENT_ROOT'] . '/ameer/WheelWise/');

    //base URL
    define('BASE_URL', 'http://localhost/ameer/WheelWise/');

    // prefixes
    define('DIR_PREFIX', 
    [

        'components' => BASE_PATH . 'components/',
        'configs' => BASE_URL . 'configs/',
        'pages' => BASE_URL . 'pages/',
        'styles' => BASE_URL . 'styles/',
        'scripts' => BASE_URL . 'scripts/',
        'assets' => BASE_URL . 'assets/',

    ]);

    // pages directory
    define('PAGES_DIR', 
    [

        'home' => BASE_URL . 'index.php',
        'login' => DIR_PREFIX['pages'] . 'login.php',
        'signup' => DIR_PREFIX['pages'] . 'signup.php',
        'profile' => DIR_PREFIX['pages'] . 'profile.php',
        'contact_us' => DIR_PREFIX['pages'] . 'contact_us.php',
        'message' => DIR_PREFIX['pages'] . 'message.php'
        
    ]);

    // configuration directories
    define('CONFIGS_DIR', 
    [

        'handle_login' => DIR_PREFIX['configs'] . 'handle_login.php',
        'handle_search' => DIR_PREFIX['configs'] . 'handle_search.php',
        'handle_signup' => DIR_PREFIX['configs'] . 'handle_signup.php',
        'handle_logout' => DIR_PREFIX['configs'] . 'handle_logout.php',
        'handle_message' => DIR_PREFIX['configs'] . 'handle_message.php',
        
        'config_db' => DIR_PREFIX['configs'] . 'config_db.php',
        'config_func' => DIR_PREFIX['configs'] . 'config_func.php',
        'config_message' => DIR_PREFIX['configs'] . 'config_message.php',

    ]);

    // styles directories
    define('STYLES_DIR', 
    [

        'main' => DIR_PREFIX['styles'] . 'style.css',
        'bootstrap' => DIR_PREFIX['styles'] . 'bootstrap-5.3.3-dist/css/bootstrap.css',

    ]);

    define('SCRIPTS_DIR', 
    [

        'bootstrap' => DIR_PREFIX['styles'] . 'bootstrap-5.3.3-dist/js/bootstrap.bundle.js',

    ]);

    define('ASSETS_DIR', 
    [

        'icon' => DIR_PREFIX['assets'] . 'icons/bootstrap-icons-1.11.3/font/bootstrap-icons.css',

    ]);

    // components directory
    define('COMPONENTS_DIR', 
    [

        'header' => DIR_PREFIX['components'] .'header.php',
        'footer' => DIR_PREFIX['components'] .'footer.php',
        'card_userInfo' => DIR_PREFIX['components'] .'card_userInfo.php',

    ]);

?>
<!-- /config_path.php -->