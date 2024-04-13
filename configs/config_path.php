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
        'styles' => 'styles/',
        'scripts' => 'scripts/',

    ]);

    // pages directory
    define('PAGES_DIR', 
    [

        'home' => BASE_URL . '/index.php',
        'login' => DIR_PREFIX['pages'] . 'login.php',
        'signup' => DIR_PREFIX['pages'] . 'signup.php',
        'profile' => DIR_PREFIX['pages'] . 'profile.php',
        'contact_us' => DIR_PREFIX['pages'] . 'contact_us.php'
        
    ]);

    // configuration directories
    define('CONFIGS_DIR', 
    [

        'handle_login' => DIR_PREFIX['configs'] . 'handle_login.php',
        'handle_signup' => DIR_PREFIX['configs'] . 'handle_signup.php',
        'handle_logout' => DIR_PREFIX['configs'] . 'handle_logout.php',
        'config_db' => DIR_PREFIX['configs'] . 'config_db.php',
        'config_func' => DIR_PREFIX['configs'] . 'config_func.php',

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

    // components directory
    define('COMPONENTS_DIR', 
    [

        'header' => DIR_PREFIX['components'] .'header.php',
        'footer' => DIR_PREFIX['components'] .'footer.php'

    ]);

?>
<!-- /config_path.php -->