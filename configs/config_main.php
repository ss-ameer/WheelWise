<!-- config_main.php -->
<?php

  require_once 'config_db.php';
  require_once 'config_path.php';
  require_once 'config_func.php';
  require_once 'config_session.php';
  require_once 'config_login.php';
  require_once 'config_message.php';

  
  define('MAIN_TITLE', 'Wheelwise');
  define('ERROR_MESSAGES', 
  [
    'emptyfield' => 'Please don\'t leave any fields empty.',
    'invalidusername' => 'Username can only contain letters and numbers.',
    'invalidemail' => 'Please enter a valid email address.',
    'wrongpassword' => 'You have entered an incorrect password.',
    'wronguid' => 'You have entered an incorrect username or email address.',
    'passworddoesnotmatch' => 'Passwords do not match.',
    'useridexists' => 'Username or email is already in use.'
  ]);

?>

<script src="<?= BASE_URL . 'scripts/jquery.js' ?>"></script>
<!-- /config_main.php -->