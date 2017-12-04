<?php
require 'partials/session.php';
require 'partials/database.php';
require 'partials/head.php';
?>

<body id="single_post">
	<?php require 'partials/header.php';?>
	<main role="main">
		<div class="wrapper">
			<?php 
			require 'logic/single_post_db.php';

			foreach($single_post as $blogpost) { ?>
				<article class="blogpost single">
					<h1 class="category center"><?= $blogpost['category'] ?></h1>
					<h2 class="center">
						<?=$blogpost['title']?>
					</h2>
					<figure class="blogpost__image">
						<img src="<?= $blogpost['image'] ?>" alt="Blogpost image.">
					</figure>
					<small class="center">
					By <?=  $blogpost['username'] ?> <i class="fa fa-circle" aria-hidden="true"></i>  in
						<?= $blogpost['category'] ?>  <i class="fa fa-circle" aria-hidden="true"></i>
						<?php foreach($comments_toPosts as $comment) { ?> <?= $comment ?> <?php } ?> comments
					</small>
					<div class="blogpost__bodytext">
						<p>
							<?= $blogpost['post'] ?>
						</p>
					</div><br/><br/>
					
					<?php include 'partials/edit_buttons.php'?>
					
				</article>
			<?php } ?>
			<br/>
				<section class="comments_wrapper_container">

					<h3 class="comments_header">Comments</h3>
					
					<?php if(!isset($_SESSION["user"])){ ?>
					<!-- Comment form if not logged in -->
						<form class="input_comment" action="logic/comment_form.php" method="POST" class="comment_form">
						
							<label for="comment" class="doNotShow">Write a comment</label>
							<textarea class="textarea_comment" name="comment" placeholder="Write your comment..." rows="6"></textarea>
							
							<input class="input_comment" type="hidden" name="postID" value=" <?=$_GET['postID']?>">
							
							<input class="input_comment" type="hidden" name="userID" value="0"><br/>
							
							<label for="text" class="doNotShow">Your name</label>
							<input class="input_commentName" id ="text" type="text" name="name" placeholder="Name">
							
							<label for="email" class="doNotShow">Your email</label>
							<input class="input_commentEmail" id="email"  type="text" name="email" placeholder="Email"><br/>
							
							<input class="comment_submit button_large button_turquoise button" type="submit" name="submit" value="Post">
							
						</form>
						
					<?php } else { ?>
						<!-- Comment form if logged in -->
						<form class="input_comment comment_form" action="logic/comment_form.php" method="POST">

							<label for="comment" class="doNotShow">Write a comment</label>
							<textarea class="textarea_comment" id ="comment" name="comment" placeholder="Write your comment..." rows="6"></textarea>

							<input type="hidden" name="postID" value=" <?=$_GET['postID']?>">
							<input type="hidden" name="userID" value=" <?=$_SESSION['user']['id']?>">

							<input type="hidden" name="name" value=" <?=$_SESSION['user']['username']?>">
							
							<input type="hidden" name="email" value=" <?=$_SESSION['user']['email']?>">

							<input class="comment_submit button_large button_turquoise button" class="comment_submit" type="submit" name="submit" value="Post">

						</form>
					<?php }	?>

		 <br/><br/><br/>
		<ul>
		 <?php foreach($comments as $comment) {?>
			<li class="comment">
				<p>
					<?= $comment['comment'] ?>
				</p>
				<small class="comment_info"><?=  $comment['name']; ?> <i class="fa fa-circle" aria-hidden="true"></i> <?= $comment['created']; ?> </small>
				<br/>
			</li>
		<?php } ?>
		</ul>
	</section>
</div>
<?php require "partials/footer.php"; ?>