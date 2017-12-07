<header role="banner">
	<!-- back to top anchor -->
	<a name="top"></a>

	<div class="login_signup--tablet">
		<?php
		if(isset($_SESSION["user"])){ ?>

			<!-- BUTTONS FOR SCREENS BIGGER THAN MOBILE -->
			<div class="header__usernav">
				<p class="new__post">
					<a class="button_large button_turquoise button" href="../new_post.php">+ Create new post</a>
				</p>

				<p class="header__usernav--loggedin">
					<a href="../profile.php">My profile</a>
					<a href="../logic/logout.php">Sign out</a>
				</p>
				<?php } 
		else { ?>
				<p class="header__usernav--loggedout">
					<a href="../login.php">Log in</a>
					<a class="button_large button_turquoise button" href="../register.php">Sign up</a>
				</p>
			</div>
			<?php } ?>
	</div>

	<div class="header__inner">
		<a href="../index.php">
			<img src="../img/millhouse-logo.svg" alt="Millhouse logo" class="logo">
			<img src="../img/millhouse-favicon.png" alt="Millhouse icon." class="icon">
			</a>
	
	<!-- MOBILE CREATE NEW POST BUTTON -->
	<div class="mobile_post_button">
		<?php
		if(isset($_SESSION["user"])){ ?>
			<p class="nav-item new__post">
				<a class="button button_turquoise nav-link" href="new_post.php"> + Create new post </a>
			</p>
			<?php } ?>
	</div>
	</div>

	<!-- NAVBAR -->

	<nav role="navigation" class="navbar navbar-expand-sm navbar-dark bg-dark justify-content-end">
		<a class="navbar-brand mobile" href="#">Navbar</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
				  
		<div class="collapse navbar-collapse justify-content-center" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="../index.php" id="nav-blog">Blog</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" data-toggle="dropdown" id="Preview" href="#" role="button" aria-haspopup="true" aria-expanded="false">
					Kategorier
					</a>
					<div class="dropdown-menu" aria-labelledby="Preview">
						<a class="dropdown-item" href="single_category.php?news">News</a>
						<a class="dropdown-item" href="single_category.php?interior">Interior</a>
						<a class="dropdown-item" href="single_category.php?style">Style</a>
						<a class="dropdown-item" href="single_category.php?featured">Featured</a>
					</div>
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
						<li class="dropdown-divider"></li>
						<?php
		if(isset($_SESSION["user"])){ ?>

							<li class="nav-item">
								<a class="nav-link header__usernav--loggedin" href="profile.php">Profile page</a>
							</li>
							<li class="nav-item">
								<a class="nav-link header__usernav--loggedin" href="../logic/logout.php">Sign out</a>
							</li>

							<?php } else { ?>

							<li class="nav-item">
								<a class="nav-link header__usernav--loggedout" href="../login.php">Log in </a>
							</li>
							<li>
							<a class="nav-link header__usernav--loggedout" href="../register.php">Sign up</a>
							</li>
							<?php } ?>
					</ul>
				</div>


		</div>

	</nav>

</header>