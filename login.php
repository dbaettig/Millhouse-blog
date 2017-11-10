<?php
session_start();

require "header.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    
    
    <form action="login_form.php" method="POST">
       <input type="text" name="username" placeholder="username">
       <input type="password" name="password" placeholder="password">
       <input type="submit" name="submit" value="Login">
        
        
    </form>
    
    <a href="register.php">Sign up</a> 
    
    
</body>
<?php
	require "footer.php";
?>
</html>


