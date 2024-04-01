<?php
  session_start();
?>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Images Gallery</title>
<link rel="stylesheet" href="notes.css">
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
            <li class = active><a href= "#/PICT_doubt/Notes/Notes.php"><i class="fa-solid fa-book" style="color: #e11432;"></i></a></li>
            <li><a href="/PICT_doubt/Question_Posting/index.php"><i class="fa-solid fa-comments fa-flip" style="color: #e11432;"></i></a></li>
            <li><a href="/PICT_doubt/Badges/Badges.php"><i class="fa-solid fa-people-group" style="color: #e11432;"></i></a></li>
            <li><a href="/PICT_doubt/Search.html"><i class="fa fa-search" style="color: #e11432"></i></a></li>
        </ul>
    </nav>
    <div class="container">
        <h1>PDFs/Notes/Exam papers</h1>
        <ul>
            <li>
                <a href="https://drive.google.com/drive/folders/0Bz9C0ysJZ7PnMGZKeWcybUpXWGM?resourcekey=0-S2yaWXvAG7ObM_GC8LRNTQ&usp=drive_link" target="_blank">
                <i class="fab fa-google-drive" style ="color: #63E6BE"></i> Link to University Question papers
                </a>
            </li>
            <li>
                <a href="Misc_pdfs/FE 2019-Curriculum.pdf" target="_blank">
                    <i class="fas fa-file-pdf"></i> FE 2019 Pattern Syllabus
                </a>
            </li>
            <li>
                <a href="npdfs/note3.pdf" target="_blank">
                    <i class="fas fa-file-pdf"></i> Note 3
                </a>
            </li>
            <!-- Add more PDF links as needed -->
        </ul>
    </div>
</body>
</html>