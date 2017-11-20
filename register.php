<?php
require 'session.php';
require 'head.php';
require 'navbar.php';
?>

	<body>
		<main>
			<div class="background__wrapper--login">
				<div class="register">
					<h3>Sign Up</h3>
					<form action="register_form.php" method="POST">
						<input class="input_register" type="text" name="username" placeholder="Username">
						<input class="input_register" type="text" name="password" placeholder="Password">
						<input class="input_register" type="text" name="email" placeholder="Email">
						<div class="input__signup--button"><input class="button_signup" type="submit" name="submit" value="Sign Up"></div>
					</form>
				</div>
			</div>
			<?php
	require "footer.php";
?>