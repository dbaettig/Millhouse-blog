<?php
require 'partials/session.php';
require 'partials/head.php';
require 'partials/database.php';
require 'logic/user_comments_db.php';
?>

<body id="profile">
	<?php require 'partials/header.php';?>
		<main class="profile_main" role="main">

			<div class="profileWrapper">
			<h1>All my comments</h1>
			<p><a href="profile.php">Back to profile page.</a></p><br/>
			
<!--			<ul>-->
				<?php
					foreach($allMyComments as $oneOfMyComments) { ?>
<!--					<li>-->
					<div class="comment">
						<p>
						 	"<?= $oneOfMyComments['comment'] ?>"<br/>
						 </p>
						 <small>
							 on <a href="single_post.php?postID=<?= $oneOfMyComments['postID'] ?>">
								<?= $oneOfMyComments['title'] ?>
								</a> 
<!--							 by <?= $oneOfMyComments['name'] ?>-->
							 <?= $oneOfMyComments['created'] ?>
						</small><br/>
<!--					</li>-->
					</div>
				<?php } ?>
<!--			</ul>-->
	</div>	
<?php
require 'partials/footer.php';
?>