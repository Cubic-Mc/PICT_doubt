<?php
session_start();
?>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Post questions and Image</title>
<link rel="stylesheet" href="/PICT_doubt/members_Area/members.css">
<link rel="stylesheet" href="styles.css">
<script src="notification_script.js"></script>
<script src="comment.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<!-- <link rel="stylesheet" href="chat bot API/style.css"> -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<!-- Google Fonts Link For Icons -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,1,0" />
<!-- <script src="chat bot API/script.js" defer></script> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>
  .homebtn{
    float : left;
    padding: 14px;
  }
</style>  
<body>
<nav class="topnav">
        <ul>
            <li class = homebtn><a href = /PICT_doubt/members_Area/welcome.php><i class="fa fa-home" aria-hidden="true"></i></a></li>
            <li><div class="dropdown">
                    <button class="dropbtn"><?php echo $_SESSION['display_user']; ?></button>
                    <div class="dropdown-content">
                        <a href="../home.html">Log out</a>
                    </div>
                </div>
            </li>
            <li class = notif><a href="#notifications"><i class="fa-solid fa-bell" style="color: #f2212c; margin-right: 5px"></i>Notifications</a></li>
            <li><a href= "/PICT_doubt/Notes/Notes.php"><i class="fa-solid fa-book" style="color: #e11432; margin-right: 5px"></i>Notes</a></li>
            <li class = active><a href="/PICT_doubt/Question_Posting/index.php"><i class="fa-solid fa-comments fa-flip" style="color: #e11432; margin-right: 5px"></i>Q/A</a></li>
            <li><a href="/PICT_doubt/Badges/Badges.php"><i class="fa-solid fa-people-group" style="color: #e11432; margin-right: 5px"></i>Leaderboard</a></li>
            <li><a href="/PICT_doubt/Search.html"><i class="fa fa-search" style="color: #e11432; margin-right: 5px"></i>Search</a></li>
        </ul>
    </nav>

    <h1>Post Questions and Image</h1>
    <form action="search.php" method="GET">

        <input type="text" name="query" placeholder="Search.....">
        <button type="submit">search</button>
    </form>
    <form action="post.php" method="post" enctype="multipart/form-data">
        <!-- <input type="text" class="search-input" placeholder="Search..."> -->
        <label for="text"></label><br>
        <!-- <input type="text" id="search-input" name="text" placeholder=""> -->
        <ul id="question-list"></ul>
       <!-- Include Font Awesome CSS -->
    </form>

<div class="form-container">
    <form action="post.php" method="post" enctype="multipart/form-data">
        <div class="input-container">
            <textarea id="text" name="text" rows="4" cols="50" placeholder="Ask Question"></textarea><br>
            <input type="file" id="image" name="image"><br>
        </div>
        <div class="options-container">
            <button type="submit" class="post-button"><i class="fas fa-paper-plane"></i> Post</button>
            <button type="button" class="ask-button"><i class="fas fa-question"></i> Ask</button>
            <button type="button" class="answer-button"><i class="fas fa-reply"></i> Answer</button>
        </div>
</div>

    </form>
    <!-- Include display_comments.php to show comments -->
<div id="commentsContainer">
    <?php include 'display_comments.php'; ?>
</div>
<?php include 'display_posts.php'; ?>


    

    <!-- Display posted content -->
    <div id="postedContent"></div>
    <div id="postedContent">
    <!-- Fetch and display posts -->
</div>

    <script>
         function redirectToQuestion(questionId) {
        // Redirect to the specific question page
        window.location.href = "question.php?id=" + questionId;
    }
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
                        <img src="uploads/${post.image}" alt="">
                        <div id="commentsContainer">
  <!-- Comments will be displayed here -->
</div>

<div id="commentForm" style="display:none;">
  <textarea id="commentText" placeholder="Write your comment here..."></textarea><br>
  <button onclick="submitComment()">Submit</button>
</div>

<button onclick="toggleCommentForm()">Comment</button>
                        <button onclick="toggleLike(this)" class="like-button" data-post-id="${post.id}"><i class="far fa-heart"></i></button>
<button onclick="deletePost(${post.id}, this)" class="delete-button"><i class="fa-solid fa-trash  style="color: #e11432"></i></button>
</form>


                        <style>
    /* Style for form elements */
    form {
        max-width: 400px;
        margin: 0 auto;
    }

    .input-container {
        position: relative;
        margin-bottom: 10px;
    }

    input[type="text"],
    textarea {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 25px; /* Rounded corners */
        box-sizing: border-box; /* Ensures padding and border are included in the width */
    }

    textarea {
        width: calc(100% - 40px); /* Adjusted width to accommodate the camera button */
        height: 100px; /* Fixed height for the comment textarea */
    }
    .camera-button {
        position: absolute;
        top: 50%;
        right: 10px; /* Adjusted position to have some spacing from the right */
        transform: translateY(-50%);
        color: #333; /* Camera emoji color */
        font-size: 20px; /* Adjust size of the camera emoji */
        cursor: pointer;
    }

    input[type="file"] {
        display: none; /* Hide the file input initially */
    }
    /* Style for like button */
.like-button {
    background-color: transparent;
    border: none;
    cursor: pointer;
    outline: none;
}

.like-button i {
    color: red; /* Red color for heart icon */
}

/* Style for delete button */
.delete-button {
    background-color:  #e11432; /* Tomato color */
    color: #fff; /* White text color */
    border: none;
    cursor: pointer;
    padding: 8px 16px;
    border-radius: 4px;
    outline: none;
}

.delete-button:hover {
    background-color:  #e11432; /* Darker shade of tomato color on hover */
}

    
</style>


                        
                    `;
                    postedContentDiv.appendChild(postDiv);
                });
            })
            .catch(error => console.error('Error fetching posted content:', error));
        }
        

        // Function to toggle like button
        function toggleLike(button) {
            const heartIcon = button.querySelector('i');
            heartIcon.classList.toggle('fas'); // Toggle filled heart
            heartIcon.classList.toggle('far'); // Toggle empty heart
            heartIcon.classList.toggle('text-red-500'); // Toggle red color
        }

        ;
        
         // Function to handle deleting a post
function deletePost(postId) {
    if (confirm("Are you sure you want to delete this post?")) {
        fetch('delete_post.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({
                postId: postId
            })
        })
        .then(response => {
            if (response.ok) {
                // Reload the page to reflect changes after deletion
                location.reload();
            } else {
                throw new Error('Failed to delete post');
            }
        })
        .catch(error => console.error('Error deleting post:', error));
    }
}  // Function to toggle comment form visibility
function toggleCommentForm() {
  var commentForm = document.getElementById('commentForm');
  if (commentForm.style.display === 'none') {
    commentForm.style.display = 'block';
  } else {
    commentForm.style.display = 'none';
  }
}

// Function to submit a comment
function submitComment() {
  const commentText = document.getElementById('commentText').value;
  if (commentText.trim() !== '') {
    // Create a new comment element
    const commentDiv = document.createElement('div');
    commentDiv.classList.add('comment');
    commentDiv.textContent = commentText;
    
    // Add the comment to the comments container
    const commentsContainer = document.getElementById('commentsContainer');
    commentsContainer.appendChild(commentDiv);
    
    // Reset the comment textarea
    document.getElementById('commentText').value = '';
    
    // Call function to store the comment in the database
    storeCommentInDatabase(commentText);
  } else {
    alert('Please enter a comment.');
  }
}

// Function to store a comment in the database
function storeCommentInDatabase(commentText) {
  // This is where you would typically make an AJAX request to send the comment data to the server
  // and store it in the database. Below is a basic example using fetch.
  
  // Replace 'save_comment.php' with the actual path to your server-side script
  fetch('save_comment.php', {
    method: 'POST',
    headers: {
      'Content-Type': 'application/json'
    },
    body: JSON.stringify({
      comment: commentText
    })
  })
  .then(response => {
    if (response.ok) {
      console.log('Comment saved successfully.');
    } else {
      console.error('Failed to save comment.');
    }
  })
  .catch(error => {
    console.error('Error saving comment:', error);
  });
}





        
        // Fetch and display posted content on page load
        window.onload = fetchPostedContent;
    </script>
</body>
</html>


