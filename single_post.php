<?php
require 'session.php';
require "header.php";
require "database.php";
?>
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
		
foreach($single_post as $blogpost) { 
 ?>
			<div class="blogpost">

				<h2>
					<?=$blogpost['title']?>
				</h2>
				<img class="single_post_image" src="<?= $blogpost['image'] ?>">
				<small>
							By <?=  $blogpost['username'] ?> in
								<?= $blogpost['category'] ?> 
								<?= $blogpost['created'] ?>
						</small>
				<p>
					<?= $blogpost['post'] ?>
				</p>
			</div>
			<?php }
		?>
			<br/>
				<div class="comments_wrapper">

				<h3 class="comments_header">Comments</h3>
				<form action="comment_form.php" method="POST" class="comment_form">
					<textarea name="comment" placeholder="Write your comment..." rows="6"></textarea>
					<br /><input type="text" name="name" placeholder="Name">
					<input type="text" name="email" placeholder="Email">
					<br/>
					<input type="hidden" name="postID" value="<?=$_GET['postID']?>">

					<input class="comment_submit" type="submit" name="submit" value="Post comment">
				</form>
			</div>
	
	<br/>
	<?php
$statement = $pdo->prepare("SELECT * FROM comments  
	WHERE postID = :postID");
				   
	$statement->execute(array(
		":postID" => $_GET["postID"]
	));
	$comments = $statement->fetchAll(PDO::FETCH_ASSOC);
				   
				   foreach($comments as $comment) { 
 ?>
		<div class="comment">
			<p> <?= $comment['comment'] ?> </p>
			<small><?=  $comment['name']; ?> </small>
			<small><?= $comment['created']; ?> </small>
			<br/>
		</div>
		
		<?php } ?>
		</div>
		<?php
require "footer.php";
?>