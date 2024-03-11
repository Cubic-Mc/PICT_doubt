<?php      
    session_start();
    $_SESSION['display_user'] = $_POST['user'];
    include('connection.php');
    include('../members_Area/welcome.php');
    
    $name = $_POST['user'];  
    $password = $_POST['pass'];

    $name = mysqli_real_escape_string($conn, $name);  
    
    $sql = "SELECT password FROM dbuser WHERE username = '$name'";
    $result = mysqli_query($conn, $sql);  
    
    if(mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
        $hashed_password = $row['password'];
        if(password_verify($password, $hashed_password)) {
            header("Location: /PICT_doubt/members_Area/welcome.php");
            exit();  
            
    //     } else {
    //         echo "<script>window.location.href = 'index.html';</script>";
    //     }
    // } else {
    //     echo "<script>window.location.href = 'index.html';</script>";
    }
}    
?>