<header role="banner">
	<?php
		if(isset($_SESSION["user"])){ ?>
		<div class="header__usernav">
			<a href="new_post.php">
					<button>+ Create new post</button>
				</a>
			<p class="header__usernav--loggedin">
				<!--Du är nu inloggad <?/*= $_SESSION["user"]["username"];*/ ?>-->
				<a href="profile.php">My profile page</a> | <a href="logout.php">Sign out</a>
			</p>
		</div>
		<?php } else { ?>
		<div class="header__usernav">
			<div></div>
			<p class="header__usernav--loggedout">
				<a href="login.php">Log in </a> | <a href="register.php">Sign up</a>
			</p>
		</div>
		<?php } ?>


		<a href="index.php">
			<div class="header__inner">
				<img src="img/millhouse-logo.svg" alt="millhouse logo" class="logo">
			</div>
		</a>

		<nav role="navigation" class="navbar navbar-expand-sm navbar-dark bg-dark justify-content-end">
			<a class="navbar-brand mobile" href="#">Navbar</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				  </button>
			<div class="collapse navbar-collapse justify-content-center" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" href="index.php" id="nav-index">Blog</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="about.php" id="nav-about">About</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="http://millhouse.com" target="_blank">Shop</a>
					</li>
				</ul>
			</div>
		</nav>
</header>