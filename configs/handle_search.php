<!-- handle_search.php -->
<?php

    require_once $_SERVER['DOCUMENT_ROOT'] . '/ameer/WheelWise/configs/config_main.php';
    
    // SIR DREW CODE: "Thank you po"
    // $searchInput = $_POST['searchInput'];
    
    // $sql = "SELECT * FROM users WHERE user_name LIKE '%$searchInput%'";
    
    // $query = mysqli_query($GLOBALS['sql_connection'], $sql);

    // $row = mysqli_num_rows($query);
    // while($data = mysqli_fetch_assoc($query)){
    //     $user_name =  $data['user_name'];
    //     $user_id =  $data['user_id'];

    //     echo "<a href='pages/profile.php?id=$user_id'>$user_name</a>";

    // }

    $searchInput = $_POST['searchInput'];
    $searchInputLower = strtolower($searchInput); // Convert search input to lowercase for case-insensitive search
    
    // Get all users
    $users = sql_userGetAll($GLOBALS['sql_connection']);
    
    $searchResults = [];
    
    // Filter users based on search input
    foreach ($users as $user) {
      $userLowerName = strtolower($user['user_name']);
      $userLowerEmail = strtolower($user['user_email']);
    
      if (strpos($userLowerName, $searchInputLower) !== false ||
          strpos($userLowerEmail, $searchInputLower) !== false) {
        $searchResults[] = $user;
      }
    }
    
    if (!empty($searchResults)) {
      echo "Search Results:";
      echo "<ul>";
      foreach ($searchResults as $user) {
        $user_name = $user['user_name'];
        $user_id = $user['user_id'];
        echo "<li><a href='" . addPage('profile') . "?id=$user_id'>$user_name</a></li>";
      }
      echo "</ul>";
    } else {
      echo "No results found for '$searchInput'";
    }
?>
<!-- /handle_search.php -->