<!-- handle_message.php -->
<?php

    require_once $_SERVER['DOCUMENT_ROOT'] . '/ameer/WheelWise/configs/config_main.php';

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $sender_id = $_SESSION['user_id'];
        $recipient_id = $_POST['recipient-id'];
        $message_content = $_POST['message-content'];

        $stmt = mysqli_prepare($sql_connection, "INSERT INTO messages (sender_id, recipient_id, message_content) VALUES (?, ?, ?)");
        mysqli_stmt_bind_param($stmt, 'iis', $sender_id, $recipient_id, $message_content);

        if (mysqli_stmt_execute($stmt)) {
            echo "Message sent!";
        } else {
            echo "Failed to send message.";
        }

        mysqli_stmt_close($stmt);
        mysqli_close($sql_connection); 
    }

?>
<!-- /handle_message.php -->