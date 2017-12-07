<?php
require 'partials/session.php';
require 'partials/head.php';
?>

<body id="register">
<?php require 'partials/header.php';?>
	<main role="main">
		<div class="background__wrapper--register">
			<div class="register">
				<h3>Sign Up</h3>
				<form action="logic/register_form.php" method="POST">
					<label for="text" required>Username</label>
						<input class="input__register" id ="text" type="text" name="username" placeholder="Username" required>
					<label for="password" required>Password</label>
						<input class="input__register" id="password" type="password" name="password" placeholder="Password" required>
					<label for="email" required>Email</label>
						<input class="input__register" id="email" type="email" name="email" placeholder="Email" required>
					<div class="input__signup--button"><input class="button_signup" type="submit" name="submit" value="Sign Up"></div>
				</form>
			</div>
		</div>
		<?php
	require "partials/footer.php";
?>