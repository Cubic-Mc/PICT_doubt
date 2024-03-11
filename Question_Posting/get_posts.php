<?php
session_start();

$servername = "localhost";
$username = "root"; // Change as per your MySQL username
$password = ""; // Change as per your MySQL password
$dbname = "doubtforum";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch posted content from the database
$sql = "SELECT * FROM posts";
$result = $conn->query($sql);

$posts = array();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $posts[] = $row;
    }
}

// Close connection
$conn->close();

// Return the posts as JSON data
header('Content-Type: application/json');
echo json_encode($posts);
?>
