<?php
require 'session.php';
require "database.php";
require 'head.php';
?>

	<body id="single_post">
		<?php require 'navbar.php';?>
		<main role="main">
			<div class="wrapper">
				<?php
	
	$statement = $pdo->prepare("SELECT * 
	FROM posts 
	JOIN users ON posts.userID = users.id 
	WHERE posts.postID = :postID 
	");
	$statement->execute(array(
		":postID" => $_GET["postID"]
	));
	$single_post = $statement->fetchAll(PDO::FETCH_ASSOC);


	$statementcomments = $pdo->prepare("SELECT COUNT(*) FROM comments where postID = :postID");
       $statementcomments->execute(array(
       ":postID" => $_GET["postID"]
   ));
       $comments_toPosts = $statementcomments->fetch(PDO::FETCH_ASSOC);


	foreach($single_post as $blogpost) { ?>
					<article class="blogpost single">
						<h1 class="category_center"><?= $blogpost['category'] ?></h1>
						<h2 class="center">
							<?=$blogpost['title']?>
						</h2>
						<figure class="blogpost__image">
							<img src="<?= $blogpost['image'] ?>">
						</figure>
						<small class="center">
					By <?=  $blogpost['username'] ?> <i class="fa fa-circle" aria-hidden="true"></i>  in
						<?= $blogpost['category'] ?>  <i class="fa fa-circle" aria-hidden="true"></i><?php foreach($comments_toPosts as $comment) { ?> <?= $comment ?> <?php } ?> comments
				</small>
						<div class="blogpost__bodytext">
						<p>
							<?= $blogpost['post'] ?>
						</p>
						</div>
						<br/><br/>
						<?php include 'edit_buttons.php'?>
					</article>
					<?php } ?>
					<br/>
					<section class="comments_wrapper_container">

						<h3 class="comments_header">Comments</h3>

						<?php if(!isset($_SESSION["user"])){ ?>
						<!-- Comment form if not logged in -->
						<form class="input_comment" action="comment_form.php" method="POST" class="comment_form">
							<textarea class="textarea_comment" name="comment" placeholder="Write your comment..." rows="6"></textarea>
							<input class="input_comment" type="hidden" name="postID" value=" <?=$_GET['postID']?>">
							<input class="input_comment" type="hidden" name="userID" value="0">
							<br /><input class="input_commentName" type="text" name="name" placeholder="Name">
							<input class="input_commentEmail" type="text" name="email" placeholder="Email">
							<br/>
							<input class="comment_submit" type="submit" name="submit" value="Post">
						</form>
						<?php } else { ?>
						<!-- Comment form if logged in -->
						<form class="input_comment" action="comment_form.php" method="POST" class="comment_form">
							<textarea class="textarea_comment" name="comment" placeholder="Write your comment..." rows="6"></textarea>
							<input type="hidden" name="postID" value=" <?=$_GET['postID']?>">
							<input type="hidden" name="userID" value=" <?=$_SESSION['user']['id']?>">
							<input type="hidden" name="name" value=" <?=$_SESSION['user']['username']?>">
							<input type="hidden" name="email" value=" <?=$_SESSION['user']['email']?>">
							<input class="comment_submit" class="comment_submit" type="submit" name="submit" value="Post">
						</form>
						<?php }	?>

						<br/>
						<br/>
						<br/>
						<br/>

						<?php
$statement = $pdo->prepare("SELECT * FROM comments  
	WHERE postID = :postID
	ORDER BY commentID DESC");
				   
	$statement->execute(array(
		":postID" => $_GET["postID"]
	));
	$comments = $statement->fetchAll(PDO::FETCH_ASSOC);
				   
	foreach($comments as $comment) { 
 ?>
							<div class="comment">
								<p>
									<?= $comment['comment'] ?>
								</p>
								<small class="comment_info"><?=  $comment['name']; ?> <i class="fa fa-circle" aria-hidden="true"></i> <?= $comment['created']; ?> </small>
								
								<br/>
							</div>

							<?php } ?>

					</div>

		
					</section>
			</div>
			<?php
require "footer.php";
?>