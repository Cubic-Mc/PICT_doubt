<?php
    include("connection.php");
    if(isset($_POST['submit'])){
        $username = mysqli_real_escape_string($conn, $_POST['user']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['pass']);
        $cpassword = mysqli_real_escape_string($conn, $_POST['cpass']);

        $sql = "SELECT * FROM dbuser WHERE username = '$username'";
        $result = mysqli_query($conn, $sql);
        $count_user = mysqli_num_rows($result);

        $sql = "SELECT * FROM dbuser WHERE email = '$email'";
        $result = mysqli_query($conn, $sql);
        $count_email = mysqli_num_rows($result);

        if ($count_user == 0 && $count_email == 0){
            if($password == $cpassword){
                $sql = "INSERT INTO dbuser(username, email, password) VALUES('$username','$email','$password')";
                $result = mysqli_query($conn, $sql);
                if($result){
                    header("Location: welcome.html");
                    exit();
                } else {
                    echo '<script>
                            alert("Failed to register user.");
                            window.location.href = "Sign_up.html";
                          </script>';
                }
            } else {
                echo  '<script>
                         alert("Passwords do not match");
                         window.location.href = "Sign_up.html";
                       </script>';
            }
        } else {
            if($count_user > 0){
                echo '<script>
                        alert("Username already exists, please select another username!");
                        window.location.href = "Sign_up.html";
                      </script>';
            }
            if($count_email > 0){
                echo '<script>
                        alert("Email already registered.");
                        window.location.href = "Sign_up.html";
                      </script>';
            }
        }
    }
?>
