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
$sql = "SELECT COUNT(*) AS count FROM notifications";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Fetch the result as an associative array
    $row = $result->fetch_assoc();
    // Extract the count value
    $count = $row['count'];
} else {
    // If no rows returned, set count to 0
    $count = 0;
}

// Close the database connection
$conn->close();

// Return the count as JSON
header('Content-Type: application/json');
echo json_encode(['count' => $count]);
?>
