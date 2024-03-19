<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Doubt forum </title>
    <link rel="stylesheet" href="/PICT_doubt/chat bot API/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google Fonts Link For Icons -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@48,400,1,0" />
    <script src="/PICT_doubt/chat bot API/script.js" defer></script>
   <link rel="stylesheet" href="members.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <nav class="topnav">
        <ul>
            <li class = active><a href = #><i class="fa fa-home" aria-hidden="true"></i></a></li>
            <li><div class="dropdown">
                    <button class="dropbtn"><?php echo $_SESSION['display_user']; ?></button>
                    <div class="dropdown-content">
                        <a href="../home.html">Log out</a>
                    </div>
                </div>
            </li>
            <li class><a href="#notifications"><i class="fa-solid fa-bell" style="color: #f2212c;"></i></a></li>
            <li><a href="/PICT_doubt/Question_Posting/index.html"><i class="fa-solid fa-comments fa-flip" style="color: #e11432;"></i></a></li>
            <li><a href="/PICT_doubt/Badges/Badges.php"><i class="fa-solid fa-people-group" style="color: #e11432;"></i></a></li>
            <li><a href="/PICT_doubt/Search.html"><i class="fa fa-search" style="color: #e11432"></i></a></li>
        </ul>
    </nav>

    <main>
        <h1><i> PICT DOUBT FORUM</i></h1>
        <h1>Platform for clearing all your doubts</h1>
        <p>Got doubts!! We've got answers! Let's decode the enigma together</p>
    </main>
    <figure class="image-container">
        <img src="/PICT_doubt/Pict gate 3.jpg" alt="Centred Image">
        <!-- <figcaption>This is a caption for the image.</figcaption> -->
    </figure>
    <button class="chatbot-toggler">
        <span class="material-symbols-rounded">mode_comment</span>
        <span class="material-symbols-outlined">close</span>
      </button>
      <div class="chatbot">
        <header>
          <h2>Chatbot</h2>
          <span class="close-btn material-symbols-outlined">close</span>
        </header>
        <ul class="chatbox">
          <li class="chat incoming">
            <span class="material-symbols-outlined">smart_toy</span>
            <p>Hi there 👋<br>How can I help you today?</p>
          </li>
        </ul>
        <div class="chat-input">
          <textarea placeholder="Enter a message..." spellcheck="false" required></textarea>
          <span id="send-btn" class="material-symbols-rounded">send</span>
        </div>
      </div>
</body>
</html>