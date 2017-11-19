<?php
session_start();

require 'database.php';
require 'header.php';

$statement = $pdo->prepare("SELECT * FROM posts
INNER JOIN users ON posts.userID = users.id
ORDER BY postID DESC");
$statement->execute();
$blog = $statement ->fetchALL(PDO::FETCH_ASSOC);
?>

<div class="wrapper">

<div class="categorymenu">

<form action= "single_category.php" method="POST">
<input class= "input_category" type="submit" name="news" value= "News">
<input class= "input_category" type="submit" name="style" value="Style">
<input class= "input_category" type="submit" name="interior" value="Interior">
<input class= "input_category" type="submit" name="featured" value="Featured">
</form>
</div>

<div class="posts">
			
		
	<?php
		foreach($blog as $blogpost) {
	?>
		<div class="blogpost">
			<div class="blogpost__image">
			  <img class="index_image" src="<?= $blogpost['image'] ?>" >
			</div>

			<div class="blogpost__text">
				<div class="blogpost__text--meta">
					<a href="single_post.php?postID=<?= $blogpost['postID'] ?>"><h2 class="left"><?=$blogpost['title']?></h2></a>
					
					<small class="left">
						By <?=  $blogpost['username'] ?> in
							<?= $blogpost['category'] ?> 
							<?= $blogpost['created'] ?>
					</small>	
					<?php include 'edit_buttons.php'?>
				</div>
				<div class="blogpost__text--bodytext">
					<p><?= $blogpost['post'] ?></p>
				</div>
			</div>
			<p class ="comment_link"><a href="single_post.php?postID=<?= $blogpost['postID'] ?>">Kommentera</a></p>
		</div>
	<?php } ?>
	</div> <!-- close .posts -->
</div> <!--wrapper-->

<?php
	require 'footer.php';
?>
