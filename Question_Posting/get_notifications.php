<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$database = "posts";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Perform the database query to get the notification count
$countSql = "SELECT COUNT(*) AS count FROM notifications";
$countResult = $conn->query($countSql);
$countRow = $countResult->fetch_assoc();
$count = $countRow['count'];

// Perform the database query to get the notifications
$notificationsSql = "SELECT id, message, postId FROM notifications ORDER BY id DESC LIMIT 5"; // Example query to get last 5 notifications
$notificationsResult = $conn->query($notificationsSql);
$notifications = array();
if ($notificationsResult->num_rows > 0) {
    while($row = $notificationsResult->fetch_assoc()) {
        $notifications[] = array(
            'id' => $row['id'],
            'message' => $row['message'],
            'postId' => $row['postId']
        );
    }
}

// Close the database connection
$conn->close();

// Return the count and notifications as JSON
header('Content-Type: application/json');
echo json_encode(['count' => $count, 'notifications' => $notifications]);
?>
