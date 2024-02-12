<?php
    include("connection.php");
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Login Form </title>
    <link rel="stylesheet" href="login.css" />
</head>

<body>
    <div class="container" id = "frm">
        <form name="f1" action = "authentication.php" onsubmit = "return validation()" method = "POST">
            <h2>Login</h2>
            <div class="input-field">
                <input type="text" id ="user" name  = "user" required />
                <label>Enter Username</label>
            </div>
            <div class="input-field">
                <input type="password" id ="pass" name  = "pass" required />
                <label>Enter password</label>
            </div>
            <div class="forget">
                <label for="Save-login">
                    <input type="checkbox" id="Save-login" />
                    <p>Save login information</p>
                </label>
                <a href="#">Forgot password?</a>
            </div>
            <button type="submit"  id = "btn" value = "Login">Log In</button>
            <div class="Create-account">
                <p>Don't have an account? <a href="Sign_up.html">Create account</a></p>
            </div>
        </form>
    </div>
    <script>  
            function validation()  
            {  
                var id=document.f1.user.value;  
                var ps=document.f1.pass.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
        </script>
</body>

</html>