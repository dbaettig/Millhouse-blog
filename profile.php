<?php
require 'session.php';
require 'head.php';
require 'profile_database.php';

?>

	<body>
		<?php require 'navbar.php';?>
		<main>

			<div class="profileWrapper">
				<div class="profileHeader">
					<div class="profileImage">
						<img src="img/glasses1.jpeg" alt="">
					</div>

					<div class="profileInfo">
						<div class="profileName">
							<h1>
								<?= $_SESSION["user"]["username"]; ?>
							</h1>
						</div>

						<div class="numberInfo">

							<?php
							
			foreach($count1 as $c1) {
			?>

								<div class="numberOfposts">
									<p class="number">
										<?= $c1 ?>
									</p>
									<h2>posts</h2>
								</div>

								<?php } ?>
								<!--stänger loop-->


								<?php
		foreach($count3 as $c3) {
		?>

									<div class="numberOfcomments">
										<p class="number">
											<?= $c3 ?>
										</p>
										<h2>comments</h2>
									</div>

									<?php } ?>
									<!--stänger loop-->

						</div>
						<!--stänger numberInfo-->
					</div>
					<!--stänger profileInfo-->
				</div>
				<!--stänger profileHeader-->


				<div class="latestInfo">
					<div class="latestPosts">
						<h3>Latest posts</h3>

					</div>
					<!--stänger numberInfo-->
				</div>
				<!--stänger profileInfo-->
			</div>
			<!--stänger profileHeader-->
			</div>
			<!--stänger headerWrapper-->


			<?php
	foreach($count2 as $c2) {
	?>

				<a href="single_post.php?postID=<?= $c2['postID'] ?>">
					<p>
						<?= $c2['title'] ?>
					</p>
				</a>

				<?php } ?>
				<!--stänger loop-->

				</br>

				<?php
	foreach($count1 as $c1) {	?>
					<a href="index.php">See all posts (<?= $c1 ?>) <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
					<?php } ?>
					<!--stänger loop-->

					</div>
					<!--stänger latestPosts-->

					<div class="latestComments">
						<h3>Latest comments</h3>

						<?php
	foreach($count4 as $c4) {
	?>
							<p>
								<?= $c4['comment'] ?>
							on
								<a href="single_post.php?postID=<?= $c4['postID'] ?>"><?= $c4['title'] ?>
								</a></p>

							<?php } ?>
							<!--stänger loop-->

							</br>

							<?php
	foreach($count3 as $c3) {
	?>


								<a href="index.php">See all comments (<?= $c3 ?>) <i class="fa fa-arrow-right" aria-hidden="true"></i></a>

								<?php } ?>
								<!--stänger loop-->

					</div>
					<!--stänger latestComments-->
					</div>
					<!--stänger latestInfo-->

					</div>
					<!--profileWrapper-->

					<?php
require 'footer.php';
?>