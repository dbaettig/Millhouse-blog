<?php
require 'session.php';
require 'head.php';
require 'profile_database.php';

?>

	<body id="profile">
		<?php require 'navbar.php';?>
		<main class="profile_main" role="main">

			<div class="profileWrapper">
				<div class="profileHeader">
					<figure class="profileImage">
						<img src="img/glasses1.jpeg" alt="">
					</figure>

					<div class="profileInfo">
						<div class="profileName">
							<h1>
								<?= $_SESSION["user"]["username"]; ?>
							</h1>
						</div>

						<div class="numberInfo">

							<?php				
			foreach($count1 as $c1) { ?>
								<div class="numberOfposts">
									<p class="number">
										<?= $c1 ?>
									</p>
									<h2>posts</h2>
								</div>

								<?php } ?>


								<?php
		foreach($count3 as $c3) { ?>

									<div class="numberOfcomments">
										<p class="number">
											<?= $c3 ?>
										</p>
										<h2>comments</h2>
										</br>
									</div>

									<?php } ?>

						</div>
						<!--stänger numberInfo-->
					</div>
					<!--stänger profileInfo-->
				</div>
				<!--stänger profileHeader-->



				<div class="latestInfo">
					<div class="latestPosts">
						<h3>Latest posts</h3>

						<!--Skriver ut de fem senaste inläggen-->
						
						<ul>
						<?php
	foreach($count2 as $c2) { ?>

							<li>
								<a href="single_post.php?postID=<?= $c2['postID'] ?>">
									<?= $c2['title'] ?>
							</a>
							</li>

							<?php } ?>
							</ul>

							</br>


							<?php
	foreach($count1 as $c1) {	?>
								<a class="seeall_link" href="all_my_posts.php">See all posts (<?= $c1 ?>) <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
								<?php } ?>

					</div>
					<!--stänger latestPosts-->

					<div class="latestComments">
						<h3>Latest comments</h3>

		<!--Skriver ut de fem senaste kommentarerna-->
					<ul>
						<?php	foreach($count4 as $c4) { ?>
							<li><p>"
								<?= $c4['comment'] ?>"
							<br/>on
								<a href="single_post.php?postID=<?= $c4['postID'] ?>">
									<?= $c4['title'] ?>
								</a> by
								<?= $c4['name'] ?>
							</p>
							<br/>
							</li>
							<?php } ?>
						</ul>

							</br>

							<?php
	foreach($count3 as $c3) { ?>

								<a class="seeall_link" href="all_my_comments.php">See all comments (<?= $c3 ?>) <i class="fa fa-arrow-right" aria-hidden="true"></i></a>

								<?php } ?>

					</div>
					<!--stänger latestComments-->
				</div>
				<!--stänger latestInfo-->

			</div>
			<!--profileWrapper-->

			<?php
require 'footer.php';
?>