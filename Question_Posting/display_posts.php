<?php
include ("get_posts.php");
// Fetch and display posts
foreach ($posts as $post) {
    // Output post content
    echo '<div class="post">';
    echo '<p>' . $post['text'] . '</p>';
    echo '<img src="uploads/' . $post['image'] . '" alt="">';

    // Output comment form
    echo '<form id="commentForm-' . $post['id'] . '" class="comment-form" action="add_comment.php" method="post" enctype="multipart/form-data">';
    echo '<input type="hidden" name="post_id" value="' . $post['id'] . '">';
    echo '<input type="text" name="commenter_name" placeholder="Your Name">';
    echo '<div class="input-container">';
    echo '<textarea name="comment_text" placeholder="Comment"></textarea>';
    echo '<label for="file-upload-' . $post['id'] . '" class="camera-button">📷</label>';
    echo '<input id="file-upload-' . $post['id'] . '" type="file" name="comment_image">';
    echo '</div>';
    echo '<input type="submit" value="Comment">';
    echo '</form>';

    // Output comments container with unique identifier
    echo '<div id="commentsContainer-' . $post['id'] . '" class="comments-container"></div>';

    echo '</div>';
}
?>