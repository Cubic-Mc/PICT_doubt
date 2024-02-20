<?php      
    include('connection.php');  
    $name = $_POST['user'];  
    $password = $_POST['pass'];  
       
        $name = stripcslashes($name);  
        $password = stripcslashes($password);  
        $name = mysqli_real_escape_string($con, $name);  
        $password = mysqli_real_escape_string($con, $password);  
      
        $sql = "select *from dbuser where username = '$name' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            header("Location: welcome.html");
            exit();  
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     
?>  