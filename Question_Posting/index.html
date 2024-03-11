<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Post questions and Image</title>
<link rel="stylesheet" href="styles.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    .post {
        border: 1px solid #ccc;
        padding: 10px;
        margin-bottom: 20px;
    }
    .post img {
        max-width: 100%;
        height: auto;
    }
    
</style>
</head>
<body>
    <h1>Post Questions and Image</h1>
    <form action="post.php" method="post" enctype="multipart/form-data">
        <label for="text">Question:</label><br>
        <textarea id="text" name="text" rows="4" cols="50"></textarea><br>
        <label for="image">Image:</label><br>
        <input type="file" id="image" name="image"><br>
        <button type="submit">Post</button>
    </form>

    <!-- Display posted content -->
    <div id="postedContent"></div>

    <script>
        // Function to fetch and display posted content
        function fetchPostedContent() {
            fetch('get_posts.php')
            .then(response => response.json())
            .then(data => {
                const postedContentDiv = document.getElementById('postedContent');
                postedContentDiv.innerHTML = ''; // Clear previous content
                data.forEach(post => {
                    const postDiv = document.createElement('div');
                    postDiv.classList.add('post');
                    postDiv.innerHTML = `
                        <p>${post.text}</p>
                        <img src="uploads/${post.image}" alt="Posted Image">
                        <button onclick="deletePost(${post.id})">Delete</button>
                    `;
                    postedContentDiv.appendChild(postDiv);
                });
            })
            .catch(error => console.error('Error fetching posted content:', error));
        }

        // Function to delete a post
        function deletePost(postId) {
            if (confirm('Are you sure you want to delete this post?')) {
                fetch(`delete_post.php?id=${postId}`, { method: 'DELETE' })
                .then(response => {
                    if (response.ok) {
                        fetchPostedContent(); // Refresh posted content after deletion
                    } else {
                        throw new Error('Failed to delete post');
                    }
                })
                .catch(error => console.error('Error deleting post:', error));
            }
        }
        function likePost(postId) {
            // You can implement the logic for liking a post here
            alert(`You liked post with ID: ${postId}`);
        }

        // Fetch and display posted content on page load
        window.onload = fetchPostedContent;
    </script>
</body>
</html>

