<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the required fields are not empty
    if (!empty($_POST['post_title']) && !empty($_POST['post_content'])) {
        // Extract and sanitize the input data
        $post_title = htmlspecialchars($_POST['post_title']);
        $post_content = htmlspecialchars($_POST['post_content']);

        // Here, you can perform further actions like saving the post to a database, displaying it, etc.
        
        // For demonstration, let's simply display the posted content
        echo "<h2>Posted Content</h2>";
        echo "<p><strong>Title:</strong> $post_title</p>";
        echo "<p><strong>Content:</strong> $post_content</p>";
    } else {
        // Handle empty fields
        echo "Title and content are required.";
    }
}
?>
