<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Millhouse Blog</title>

	<!-- BOOTSTRAP -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

	<!-- Font Awesome -->
	<script src="https://use.fontawesome.com/d108b6d77d.js"></script>

	<!-- OUR CSS -->
	<link rel="stylesheet" type="text/css" href="css/style.css">
	
	<!-- CK WYSIWYG editor -->
	<script src="https://cdn.ckeditor.com/ckeditor5/1.0.0-alpha.1/classic/ckeditor.js"></script>
</head>

<header>
	<?php
		if(isset($_SESSION["user"])){ ?>
		<p class="header__user--loggedin">Du är nu inloggad
			<?= $_SESSION["user"]["username"]; ?>
			| <a href="logout.php">Sign out</a></p>
			
			  <?php } else {
			echo '<p class="header__user--loggedout">
			<a href="login.php">Sign in</a> | <a href="register.php">Sign up</a></p>';
		}
	?>

		<div class="header__inner">
			<img src="img/millhouse-logo.svg" alt="millhouse logo" class="logo">
		</div>

		<nav class="navbar navbar-expand-lg  navbar-dark bg-dark justify-content-end">
			<a class="navbar-brand mobile" href="#">Navbar</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	  </button>
			<div class="collapse navbar-collapse justify-content-center" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item active">
						<a class="nav-link" href="index.php">Blog <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="about.php">About</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="http://millhouse.com" target "_blank">Shop</a>
					</li>
				</ul>
			</div>
		</nav>
</header>

<body>
	<main>
		