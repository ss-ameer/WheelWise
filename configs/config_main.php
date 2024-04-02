<!-- config_main.php -->
<?php 

    include_once 'config_path.php';

    define('MAIN_TITLE', 'Wheelwise');
    define('PAGES', [
        'home',
        'login',
        'signup'
    ]);

    // adds a specified style
    function addStyle($style_name, $extension = '') {

      $dir = $extension . STYLES_DIR[$style_name];
      echo "<link rel=\"stylesheet\" href=\"{$dir}\">"; 
    
    };

    // adds a specified component
    function addComponent($component_name, $mode = 0) 
    {

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

    };

    function addConfig($config_name) {

      return CONFIGS_DIR[$config_name];
    
    };

    function addPage($page_name) {

       return PAGES_DIR[$page_name];

    }

    function debug() {
      echo "SUCCESS";
    };

?> 
<!-- /config_main.php -->