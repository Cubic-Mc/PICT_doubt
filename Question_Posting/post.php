<?php
session_start();
// Connect to your database (replace with your database credentials)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "doubtforum";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $question_text = $_POST['text'];
    
    // Check if an image is uploaded
    if ($_FILES['image']['size'] > 0) {
        $image_name = $_FILES['image']['name'];
        $image_temp = $_FILES['image']['tmp_name'];

        // Upload image to server
        move_uploaded_file($image_temp, "uploads/" . $image_name);
    } else {
        $image_name = ""; // Set empty string if no image uploaded
    }

    // Insert data into database
    $sql = "INSERT INTO posts (text, image, username) VALUES ('$question_text', '$image_name', '" . $_SESSION['display_user'] . "')";
    if ($conn->query($sql) === TRUE) {
        echo "Post added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the connection
$conn->close();
?>
