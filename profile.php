<?php
require 'partials/session.php';
require 'partials/head.php';
require 'logic/profile_db.php';
?>

<body id="profile">
	<?php require 'partials/header.php';?>
	<main class="profile_main" role="main">

		<div class="profileWrapper">
			<div class="profileheader">
				<div class="profileheader__image center">
					<div class="profileheader__image--center">
						<figure class="profileheader__image--frame">
							<img src="<?= $info[0]['profilepic'] ?>" alt="">
						</figure>
						<h5>Edit profile picture</h5>
						<form class="profileheader__image--form" action="logic/profilepic_form.php" method="post" enctype="multipart/form-data">
							<input class="input_upload" type="file" name="uploaded_file">
							<input class="button button_turquoise" type="submit" name="submit" value="Upload">
						</form>
					</div>
				</div> <!-- .profileheader__image -->

				<div class="profileheader__info">
					<div class="profileheader__info--name">
						<h1>
							<?= $_SESSION["user"]["username"]; ?>
						</h1>
					</div>
					<div class="numberInfo center">

						<?php foreach($count1 as $c1) { ?>
							<div class="numberOfposts">
								<a href="user_posts.php">
									<p class="number"><?= $c1 ?></p>
									<h2>posts</h2>
								</a>
							</div>
						<?php } ?>

						<?php foreach($count3 as $c3) { ?>
							<div class="numberOfcomments">
								<a href="user_comments.php">
									<p class="number">
										<?= $c3 ?>
									</p>
									<h2>comments</h2><br/>
								</a>
							</div>
						<?php } ?>

					</div> <!-- .numberInfo-->
				</div> <!-- .profileheader__info -->
			</div> <!-- .profileHeader-->

			<div class="latestInfo">
			
				<div class="latestPosts">
					<h3>Latest posts</h3>
					<!-- Print out the 5 latest posts -->
					<ul>
						<?php foreach($count2 as $c2) { ?>
							<li>
								<a href="single_post.php?postID=<?= $c2['postID'] ?>"><?= $c2['title'] ?></a>
							</li>
						<?php } ?>
					</ul><br/>

						<?php foreach($count1 as $c1) {	?>
							<a class="seeall_link" href="user_posts.php">See all posts (<?= $c1 ?>) <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
						<?php } ?>
				</div><!-- .latestPosts -->

				<div class="latestComments">
					<h3>Latest comments</h3>

			<!-- Print out the 5 latest comments -->
				<ul>
					<?php foreach($count4 as $c4) { ?>
						<li>
							<p>"<?= $c4['comment'] ?>"</p>
							<small>
								on <a href="single_post.php?postID=<?= $c4['postID'] ?>">
									<?= $c4['title'] ?>
									</a> 
								by <?= $c4['name'] ?>
							</small><br/>
						</li>
					<?php } ?>
				</ul><br/>
					
				<?php foreach($count3 as $c3) { ?>
					<a class="seeall_link" href="user_comments.php">
						See all comments (<?= $c3 ?>) 
						<i class="fa fa-arrow-right" aria-hidden="true"></i>
					</a>
				<?php } ?>

			</div><!-- .latestComments -->
		</div><!-- .latestInfo -->
	</div><!-- .profileWrapper-->

<?php require 'partials/footer.php'; ?>