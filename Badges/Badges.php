<?php
  session_start();
?>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Images Gallery</title>
<link rel="stylesheet" href="Badges.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<nav class="topnav">
        <ul>
            <li class = home><a href = /PICT_doubt/members_Area/welcome.php><i class="fa fa-home" aria-hidden="true"></i></a></li>
            <li><div class="dropdown">
                    <button class="dropbtn"><?php echo $_SESSION['display_user']; ?></button>
                    <div class="dropdown-content">
                        <a href="../home.html">Log out</a>
                    </div>
                </div>
            </li>
            <li><a href="#notifications"><i class="fa-solid fa-bell" style="color: #f2212c;"></i></a></li>
            <li><a href="/PICT_doubt/Question_Posting/index.html"><i class="fa-solid fa-comments fa-flip" style="color: #e11432;"></i></a></li>
            <li class = active><a href="#/PICT_doubt/Badges/Badges.php"><i class="fa-solid fa-people-group" style="color: #e11432;"></i></a></li>
            <li><a href="/PICT_doubt/Search.html"><i class="fa fa-search" style="color: #e11432"></i></a></li>
        </ul>
    </nav>
<div class="gallery">
  <div class="image">
    <img src="Badge1.jpg.jpeg" alt="Badge1">
    <div class="info">50 Questions, Badge will unlocked</div>
  </div>
  <div class="image">
    <img src="Badge2.jpg.jpeg" alt="Badge2">
    <div class="info">Active Member for 3 months</div>
  </div>
  <div class="image">
    <img src="Badge3.jpg.jpeg" alt="Badge3">
    <div class="info">25 Answers,Badge will unlocked</div>
  </div>
  <div class="image">
    <img src="Badge4.jpg.jpeg" alt="Badge4">
    <div class="info">Congratulations u become a moderator</div>
  </div>
  <div class="image">
    <img src="Badge5.jpg.jpeg" alt="Badge5">
    <div class="info">5 Questions, Badge will be unlocked!!</div>
  </div>
  <div class="image">
    <img src="Badge6.jpg.jpeg" alt="Badge6">
    <div class="info">Active member for 6 months</div>
  </div>
</div>
</body>
</html>