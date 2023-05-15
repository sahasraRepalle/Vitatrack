<?php
session_start();
?>
<!DOCTYPE>   
<html>
<head>
<title>VITATRACK</title>
    <link rel="stylesheet" type="text/css" href="style log in.css">
<body>
    <script>                
        function validate(){            
            var name=document.f1.username.value;  
            var password=document.f1.password.value;  
              
            if(name.length<1 && password.length<1){  
                alert("Please enter username and password");  
                return false; 
            }
            if(name.length<1){  
                alert("Please enter username");  
                return false; 
            }
            if(password.length<1){  
                alert("Please enter Password");  
                return false;
            }          
            
        }  
    </script>
    <div class="loginbox">
    <img src="avatar.jpg" class="avatar">
    <?php
        echo $_SESSION['message'];
        $_SESSION['message']="";
    ?>
    <h1>Login Here</h1>
    <form name="f1" method="post" action="authenticate.php" onsubmit="return validate();">
            <p>Username</p>
            <input type="text" name="username" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name="password" placeholder="Enter Password">
            <input type="submit" name="login" value="Login">
            <br>
        </form>
        <p>Not registered yet? <a href='register.php'>Register Here</a></p>
    </div>

</body>
</head>
</html>
