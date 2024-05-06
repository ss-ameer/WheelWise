<!-- handle_message-conversations.php -->
<?php
    require_once $_SERVER['DOCUMENT_ROOT'] . '/ameer/WheelWise/configs/config_main.php';

    $user_id = $_GET['user_id'];

    $sql = "SELECT u.*, m.message_id, m.sender_id, m.recipient_id, m.message_content, m.message_timestamp
            FROM users u 
            INNER JOIN (
                SELECT 
                    CASE
                        WHEN sender_id = ? THEN recipient_id
                        ELSE sender_id
                    END AS other_user_id,
                    MAX(message_timestamp) AS max_timestamp
                FROM messages
                WHERE sender_id = ? OR recipient_id = ?
                GROUP BY 
                    CASE
                        WHEN sender_id = ? THEN recipient_id
                        ELSE sender_id
                    END
            ) AS max_messages
            ON u.user_id = max_messages.other_user_id
            INNER JOIN messages m 
            ON (u.user_id = m.sender_id AND m.recipient_id = ?) OR (u.user_id = m.recipient_id AND m.sender_id = ?)
            WHERE u.user_id != ? 
            AND (m.sender_id = ? OR m.recipient_id = ?)
            AND m.message_timestamp = max_messages.max_timestamp
            ORDER BY m.message_timestamp DESC;
        ";

    $stmt = mysqli_prepare($GLOBALS['sql_connection'], $sql);
    mysqli_stmt_bind_param($stmt, 'iiiiiiiii', $user_id, $user_id, $user_id, $user_id, $user_id, $user_id, $user_id, $user_id, $user_id);

    if(mysqli_stmt_execute($stmt)){
        $result = mysqli_stmt_get_result($stmt);

        $messages = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $messages[] = $row;
        }

        mysqli_free_result($result);

        foreach($messages as $message){
            $user_name = $message['user_name'];
            $message_id = $message['message_id'];
            $sender_id = $message['sender_id'];
            $recipient_id = $message['recipient_id'];
            $latest_message = $message['message_content'];
            $latest_timestamp = $message['message_timestamp'];

            $temp_array = sql_userGet($GLOBALS['sql_connection'], $sender_id);

            if ($user_id == $sender_id) {
                $temp_array = sql_userGet($GLOBALS['sql_connection'], $recipient_id);
            }

            $convo_name_first = $temp_array['user_name_first'];
            $convo_name_last = $temp_array['user_name_last'];
            $convo_id = $temp_array['user_id'];
            $convo_name_full = $convo_name_first  . ' ' . $convo_name_last;

            echo "
                <div class=\"row my-2\">
                    <div class=\"col\">
                        <div class=\"card conversation-card\" data-user-id=\"{$convo_id}\">
                            <div class=\"card-body\">
                                <span class=\"h6\">{$convo_name_first}</span><br>
                                <small>{$latest_message}</small>
                            </div>
                            <div class=\"card-footer text-end\">
                                <small class=\"text-body-secondary\">
                                    {$latest_timestamp}
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
            ";
        }

    } else { 
        echo "Error fetching messages."; 
    }
?>

<!-- /handle_message-conversations.php -->