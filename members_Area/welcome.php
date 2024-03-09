<?php
include('PICT_doubt/Login_page/connection.php');

// Check if the user is set in the POST request
if(isset($_POST['user'])) {
    $user = $_POST['user'];

    // Perform SQL query
    $query = "SELECT * FROM dbuser WHERE user='$user'";
    $result = mysqli_query($conn, $query);

    if($result) {
        // Fetch the row
        $row = mysqli_fetch_assoc($result);
        $username = $row['username'];
    } 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Doubt forum </title>
   <link rel="stylesheet" href="/PICT_doubt/home.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <nav class="topnav">
        <ul>
            <li><a href="Login_page/index.html"><?php echo $user; ?></a></li>
            <li><a href="#notifications"><i class="fa-solid fa-bell" style="color: #f2212c;"></i></a></li>
            <li><a href="/PICT_doubt/posting_question.html"><i class="fa-solid fa-comments fa-flip" style="color: #e11432;"></i></a></li>
            <li><a href="/PICT_doubt/community/community.html"><i class="fa-solid fa-people-group" style="color: #e11432;"></i></a></li>
            <li><a href="index1.html"><i class="fa-sharp fa-solid fa-house" style="color: #e11432;"></i></a></li>
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
</body>
</html>