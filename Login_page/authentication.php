<?php      
    include('connection.php');  
    $name = $_POST['user'];  
    $password = $_POST['pass']; 
       
        $name = stripcslashes($name);  
        $password = stripcslashes($password);  
        $name = mysqli_real_escape_string($conn, $name);  
        $password = mysqli_real_escape_string($conn, $password);  
      
        $sql = "select *from dbuser where username = '$name' and password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            header("Location: welcome.html");
            exit();  
        }  
        else{  
            echo "<script>window.location.href = 'index.html';</script>";
            // echo "<script>alert('Incorrect Username or Password!');</script>";
        }     
?>  