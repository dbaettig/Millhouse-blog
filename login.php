<?php
require 'partials/session.php';
require 'partials/head.php';
?>

<body id="login">
<?php require 'partials/header.php'; ?>
	<main role="main">
		<div class="background__wrapper--login">
			<div class="login">
				<h3>Log in</h3>
				<form action="logic/login_form.php" method="POST">
					<label for="text">Username</label><input class="input__login" type="text" name="username" placeholder="username">
					<label for="password">Password</label><input class="input__login" type="password" name="password" placeholder="password">
					<div class="input__login--button">
						<input class="button button_login" type="submit" name="submit" value="Login">
					</div>
					<div class="sign__up--paragraph">
						<p>Don't have an account yet?</p><a href="register.php" class="account__signup--click" name="signup">Sign up here!</a>
					</div>
				</form>
			</div>
		</div>
<?php require "partials/footer.php"; ?>
</html>