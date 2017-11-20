<?php
require 'session.php';
require "header.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>

<body>
    <div class="background__wrapper--login">
    <div class="login">
    <h3>Log in</h3> 
    <form action="login_form.php" method="POST">
        <input class="input_login" type="text" name="username" placeholder="username">
       <input class="input_login" type="password" name="password" placeholder="password">
       <div class="input__login--button"><input class="button_login" type="submit" name="submit" value="Login"></div>
       <div class="sign__up--paragraph"><p>Don't have an account yet?</p><a href="register.php" class="account__signup--click" name="signup">Sign up</a></div>
        
    </form>
    
  
  </div>
  </div>

</body>
<?php
	require "footer.php";
?>
</html>


