<?php
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

// Handle text and image upload
$text = $_POST['text'];
$image = $_FILES['image']['name'];
$image_tmp = $_FILES['image']['tmp_name'];
$image_path = 'uploads/' . $image;

if(move_uploaded_file($image_tmp, $image_path)) {
    // Insert data into database
    $sql = "INSERT INTO posts (text, image) VALUES ('$text', '$image')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    echo "Failed to upload image";
}

$conn->close();
?>
