<!-- handle_message-fetch.php -->
<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/ameer/WheelWise/configs/config_main.php';

if(isset($_GET['target_user_id'])){
    $user_id = $_GET['user_id'];
    $target_user_id = $_GET['target_user_id'];
    $all_users = sql_userGetAll($GLOBALS['sql_connection']);

    $sql = "SELECT * 
            FROM messages 
            WHERE (sender_id = ? AND recipient_id = ?) OR (sender_id = ? AND recipient_id = ?)
            ORDER BY message_timestamp ASC";
    
    $stmt = mysqli_prepare($GLOBALS['sql_connection'], $sql);
    mysqli_stmt_bind_param($stmt, 'iiii', $user_id, $target_user_id, $target_user_id, $user_id);
    
    if(mysqli_stmt_execute($stmt)){
        $result = mysqli_stmt_get_result($stmt);
    
        $messages = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $messages[] = $row;
        }
    
        mysqli_free_result($result);

        foreach($all_users as $user){
            if($user['user_id'] == $target_user_id){
                $target_user = [
                    'user_name' => $user['user_name'],
                    'user_name_full' => $user['user_name_first'] . $user['user_name_last']
                ];
            }
        };

        json_encode($target_user);

        // echo ("
        //     <div class=\"border border-secondary\">
        //         <p class=\"h6\" id=\"message-view-fullname\">{$user_name_full}<small class=\"text-body-secondary\" id=\"message-view-name\">{$user_name}</small></p>
        //     </div>
        // ");
    
        foreach($messages as $message){
            $sender = $message['sender_id'];
            $recipient = $message['recipient_id'];
            $content = $message['message_content'];
            $timestamp = $message['message_timestamp'];
    
            $class_row = $sender == $user_id ? 'justify-content-end' : 'justify-content-start';
    
            echo ("
                <div class=\"row my-2 {$class_row}\">
                    <div class=\"col-10\">
                        <div class=\"card\">
                            <div class=\"card-body\">
                                {$content}
                            </div>
                            <div class=\"card-footer\">
                                <small class=\"text-body-secondary\">
                                    {$timestamp}
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
            ");
        }
    } else { 
        echo "Error fetching messages."; 
    }
}
?>

<!-- /handle_message-fetch.php -->