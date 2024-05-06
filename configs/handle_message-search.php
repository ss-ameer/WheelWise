<!-- handle_message-search.php -->
<?php 

require_once $_SERVER['DOCUMENT_ROOT'] . '/ameer/WheelWise/configs/config_main.php';

if(isset($_GET['search_input'])) {
    $searchInput = "%" . $_GET['search_input'] . "%";

    $sql = "SELECT * FROM users WHERE user_name LIKE ? OR user_name_first LIKE ? OR user_name_last LIKE ? OR CONCAT(user_name_first, ' ', user_name_last) LIKE ?;";
    $stmt = mysqli_prepare($GLOBALS['sql_connection'], $sql);
    
    mysqli_stmt_bind_param($stmt, "ssss", $searchInput, $searchInput, $searchInput, $searchInput);
    mysqli_stmt_execute($stmt);
    
    $result = mysqli_stmt_get_result($stmt);
    
    $users = array();
    
    while($row = mysqli_fetch_assoc($result)) {
        $users[] = $row;
    }
    
    mysqli_free_result($result);
    
    foreach($users as $user) {
        $user_id = $user['user_id'];
        $user_name = $user['user_name'];
        $user_name_full = $user['user_name_first'] . ' ' . $user['user_name_last'];

        echo("
            <div class=\"row my-2 message_search-result\" data-user-id=\"{$user_id}\">
                <div class=\"col\">
                    <div class=\"card\">
                        <div class=\"card-body\">
                            <span class=\"\">{$user_name_full}<br><small class=\"text-body-secondary\">{$user_name}</small></span>
                        </div>
                    </div>
                </div>
            </div>
        ");
    }
}

?>
<!-- /handle_message-search.php -->