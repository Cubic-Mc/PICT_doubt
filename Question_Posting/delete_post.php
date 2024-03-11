<?php
session_start();

$servername = "localhost";
$username = "root"; // Change as per your MySQL username
$password = ""; // Change as per your MySQL password
$dbname = "doubtforum";

// Get post ID from query parameter
$user = $_SESSION['display_user'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Delete post from database
$sql = "DELETE FROM posts WHERE username = $user";

if ($conn->query($sql) === TRUE) {
    echo "Post deleted successfully";
} else {
    echo "Error deleting post: " . $conn->error;
}

$conn->close();
?>
