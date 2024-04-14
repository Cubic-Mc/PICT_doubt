<?php
// Connect to your database (replace with your database credentials)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "posts";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch questions from the database
$sql = "SELECT posts FROM posts "; // Adjust your_table_name according to your database structure
$result = $conn->query($sql);

$questions = array();
if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        $posts[] = $row["text"];
    }
}

// Close connection
$conn->close();

// Output questions as JSON
header('Content-Type: application/json');
echo json_encode($posts);
?>
