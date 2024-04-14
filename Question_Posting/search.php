<!-- search.php -->
<?php
// Establish connection to MySQL database
$servername = "localhost"; // Assuming MySQL is running on localhost
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$database = "posts"; // Your MySQL database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve search query
$search_query = $_GET['query'];

// Perform SQL query to search for relevant data
$sql = "SELECT * FROM posts WHERE `text` LIKE '%$search_query%'";
$result = $conn->query($sql);

// Display search results
if ($result->num_rows > 0) {
    echo "<h2>Search Results:</h2>";
    while($row = $result->fetch_assoc()) {
        $question_id = $row["id"]; // Assuming 'id' is the primary key of your table
        $question_text = $row["text"]; // Change 'question_text' to the actual column name in your table

        // Display the question without a link, but with an onclick event to redirect to the question
        echo "<p onclick=\"redirectToQuestion($question_id)\">$question_text</p>";
    }
} else {
    echo "<p>No results found</p>";
}

// Close connection
$conn->close();
?>