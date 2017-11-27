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
						<input class="input_register" type="text" name="username" placeholder="Username">
						<input class="input_register" type="password" name="password" placeholder="Password">
						<input class="input_register" type="text" name="email" placeholder="Email">
						<div class="input__signup--button"><input class="button_signup" type="submit" name="submit" value="Sign Up"></div>
					</form>
				</div>
			</div>
			<?php
	require "partials/footer.php";
?>