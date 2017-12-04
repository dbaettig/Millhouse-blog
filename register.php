<?php
require 'partials/session.php';
require 'partials/head.php';
?>

<body id="register">
<?php require 'partials/header.php';?>
	<main role="main">
		<div class="background__wrapper--login">
			<div class="register">
				<h3>Sign Up</h3>
				<form action="logic/register_form.php" method="POST">
					<label for="text">Username</label>
						<input class="input__register" id ="text" type="text" name="username" placeholder="Username">
					<label for="password">Password</label>
						<input class="input__register" id="password" type="password" name="password" placeholder="Password">
					<label for="email">Email</label>
						<input class="input__register" id="email" type="email" name="email" placeholder="Email">
					<div class="input__signup--button"><input class="button_signup" type="submit" name="submit" value="Sign Up"></div>
				</form>
			</div>
		</div>
		<?php
	require "partials/footer.php";
?>