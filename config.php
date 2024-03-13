<!-- config.php -->
<?php 

    define('MAIN_TITLE', 'Wheelwise');
    define('PAGES', [
        'home', 
    ]);

    // directories
    define('BASE_PREFIX', './');
    
    define('DIR_PREFIX', [
        'components' => BASE_PREFIX . 'components/',
        'styles' => BASE_PREFIX . 'styles/'
    ]);

    // styles directory
    define('STYLES_DIR', [
        'main' => DIR_PREFIX['styles'] . 'style.css'
    ]);
    
    // components directory
    define('COMPONENTS_DIR', [
        'header' => DIR_PREFIX['components'] .'header.php',
        'footer' => DIR_PREFIX['components'] .'footer.php'
    ]);

    // adds a specified style
    function addStyle($style_name) {
        $dir = STYLES_DIR[$style_name];
        echo "<link rel=\"stylesheet\" href=\"$dir\">";
    }

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
              echo 'ERROR: there was a problem with the code.';
          }
        } else {
          echo "ERROR: File '$component_name.php' was not found in directory.";
        }
    }

?> 
<!-- /config.php -->