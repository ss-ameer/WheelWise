<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/ameer/WheelWise/configs/config_main.php';

// Start a session (if required for user authentication)

// Get the user ID from request data
$user_id = $_GET['user_id'];

echo $user_id;

$sql = "SELECT m.message_id, m.sender_id, m.recipient_id, m.message_content, m.message_timestamp, u.user_name AS sender_username FROM messages m INNER JOIN users u ON m.sender_id = u.user_id WHERE m.recipient_id = ?";

$stmt = mysqli_prepare($GLOBALS['sql_connection'], $sql);
mysqli_stmt_bind_param($stmt, "i", $user_id);
mysqli_stmt_execute($stmt);

$result = mysqli_stmt_get_result($stmt);
$messages = array();
if (mysqli_num_rows($result) > 0) {
  while ($row = mysqli_fetch_assoc($result)) {
    $messages[] = $row;
  }
}
mysqli_stmt_close($stmt);
mysqli_close($GLOBALS['sql_connection']);

echo json_encode($messages); // Send messages as JSON response
