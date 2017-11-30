<header role="banner">
	<div class="login_signup--tablet">
		<?php
		if(isset($_SESSION["user"])){ ?>

			<div class="header__usernav">
				<p class="new__post">
					<a class="button_large button_turquoise button" href="../new_post.php">+ Create new post</a>
				</p>
				<p class="header__usernav--loggedin">
<!--					Du är nu inloggad <?= $_SESSION["user"]["username"]; ?>-->
<!--					<a href="../profile.php">Profile page</a> <a href="../logic/logout.php">Sign out</a>-->
					<a href="../profile.php"><?= $_SESSION["user"]["username"]; ?>'s profile</a> <a href="../logic/logout.php">Sign out</a>
				</p>
			</div>
			<?php } else { ?>
			<div class="header__usernav">
				<div><!--empty div for flex positioning--></div>
				<p class="header__usernav--loggedout">
					<a href="../login.php">Log in </a><a class="button_large button_turquoise button" href="../register.php">Sign up</a>
				</p>
			</div>
			<?php } ?>
	</div>

	<a href="../index.php">
		<div class="header__inner">
			<img src="../img/millhouse-logo.svg" alt="Millhouse logo" class="logo">

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
					<a class="nav-link" href="../index.php" id="nav-index">Blog</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="../about.php" id="nav-about">About</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="http://millhouse.com" target="_blank">Shop</a>
				</li>
			</ul>
			<div class="login_signup">
				<ul>
					<?php
		if(isset($_SESSION["user"])){ ?>

						<li class="nav-item">
							<p class="new__post">
								<a class="button button_turquoise nav-link" href="new_post.php" target="_blank"> + Create new post </a>
							</p>
						</li>

						<li class="nav-item">
							<p class="header__usernav--loggedin">
								<!--Du är nu inloggad <?/*= $_SESSION["user"]["username"];*/ ?>-->
								<a class="nav-link" href="profile.php" target="_blank">Profile page <br/>  <a class="nav-link" href="../logic/logout.php">Sign out</a>
							</p>
						</li>

						<?php } else { ?>

						<li class="nav-item">
							<p class="header__usernav--loggedout">
								<a class="nav-link" href="../login.php" target="_blank">Log in </a> <br/> <a class="nav-link" href="../register.php">Sign up</a>
							</p>
						</li>

						<?php } ?>

			</div>
			</ul>
		</div>
	</nav>
</header>