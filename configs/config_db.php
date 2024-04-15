<!-- config_db.php -->
<?php

  global $sql_connection;

  $server = 'localhost';
  $db_user = 'root';
  $db_password = '';
  $db_name = 'wheelwise_db';
  $sql_connection = mysqli_connect($server, $db_user, $db_password, $db_name);

  // connection debug.
  function sql_connectionDebug($connection) {
      if (!$connection) {
          die("Connection Failed: " . mysqli_connect_error());
      } else { echo 'Connection successful'; }
  }

  function sql_userGetAll($connection) {
      $sql = "SELECT * FROM users;";
    
      $stmt = mysqli_stmt_init($connection);
      if (!mysqli_stmt_prepare($stmt, $sql)) {
        return false;
      }

      // Execute the statement (no need for data binding in this case)
      mysqli_stmt_execute($stmt);

      $resultData = mysqli_stmt_get_result($stmt);
      $usersData = array();

      while ($row = mysqli_fetch_assoc($resultData)) {
        $usersData[] = $row;
      }
    
      mysqli_stmt_close($stmt);
      mysqli_free_result($resultData);
    
      return $usersData;
    }

    function sql_userGet ($connection, $userid){
      $users = sql_userGetAll($connection);

      foreach ($users as $user) {
          if ($user['user_id'] == $userid) {
              return $user; }
      } return false; }
    
    function sql_userCheckId ($connection, $username, $email) {
      $users = sql_userGetAll($connection);

      foreach ($users as $user) {
        if ($user['user_name'] === $username || $user['user_email'] === $email) {
            return $user['user_id'];
        } else { return true; }}}

  // creates a new user in a database.
  function sql_createUser(
      $connection, $username, $email, $firstname, $lastname, $middlename, $province, $municipality, $dateofbirth, $gender, $password) 

      {
          $sql = "INSERT INTO users (
              user_name, user_email,
              user_name_first,
              user_name_last,
              user_name_middle,
              user_address_province,
              user_address_municipality,
              user_date_of_birth,
              user_gender,
              user_password)
              VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

          $stmt = mysqli_stmt_init($connection);

          if (!mysqli_stmt_prepare($stmt, $sql)) {
              return false; } 

          $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

          mysqli_stmt_bind_param(
              $stmt, "ssssssssss", $username, $email, $firstname, $lastname, $middlename, $province, $municipality, $dateofbirth, $gender, $hashedPassword);

          mysqli_stmt_execute($stmt);
          mysqli_stmt_close($stmt);
  }

  // checks if a user's login credentials are valid.
  function sql_loginUser( $connection, $userid, $password) {
    $idCheck = sql_userCheckId($connection, $userid, $userid);

    if ($idCheck == false) {
        header("Location: " . addPage('login') . "?error=wronguid");
        exit(); }
    
    $user = sql_userGet($connection, $idCheck);
    
    $passwordHashed = $user['user_password'];
    $passwordCheck = password_verify($password, $passwordHashed);


    if ($passwordCheck === false) {
        header("Location: " . addPage('login') . "?error=wrongpassword");
        exit(); }
    else if ($passwordCheck === true) {
        session_setUser($user);
        header("Location: " . addPage('home')); }  
  }

        
?>
<!-- /config_db.php -->