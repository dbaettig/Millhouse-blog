<?php
require 'partials/session.php';
require 'partials/head.php';
require 'partials/database.php';
require 'logic/user_posts_db.php';

?>


<body id="profile">
		<?php require 'partials/header.php';?>
		<main class="profile_main" role="main">

			<div class="profileWrapper">
			
			<h1>All my posts</h1>
			<p><a href="profile.php">Back to profile page.</a></p>
			<br/>
			
			<ul>
	<?php
	foreach($allMyPosts as $oneOfMyPosts) { ?>

							<li>
								<a href="single_post.php?postID=<?= $oneOfMyPosts['postID'] ?>">
									<?= $oneOfMyPosts['title'] ?>
							</a>
								<small><?= $oneOfMyPosts['created'] ?></small>
							</li>

							<?php } ?>
							</ul>
			</div>	
<?php
require 'partials/footer.php';
?>