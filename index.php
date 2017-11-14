<?php
session_start();

require 'database.php';
require 'header.php';

$statement = $pdo->prepare("SELECT * FROM posts
INNER JOIN users ON posts.userID = users.id");
$statement->execute();
$blog = $statement ->fetchALL(PDO::FETCH_ASSOC);
?>
<div class="wrapper">
	<div class="posts">
		
		<?php
			foreach($blog as $blogpost) {
		?>
			<div class="blogpost">
			
				<div class="blogpost__image">
				  <img src="<?= $blogpost['image'] ?>" >
				</div>
				
				<div class="blogpost__text">
					<div class="blogpost__text--meta">
						<a href="single_post.php?postID=<?= $blogpost['postID'] ?>"><h2><?=$blogpost['title']?></h2></a>
						<small>
							By <?=  $blogpost['username'] ?> in
								<?= $blogpost['category'] ?> 
								<?= $blogpost['created'] ?>
						</small>
					</div>
					<div class="blogpost__text--bodytext">
						<p><?= $blogpost['post'] ?></p>
					</div>
				</div>
			</div>
		<?php } ?>
	</div> <!-- close .posts -->
</div> <!--wrapper-->

<?php
	require 'footer.php';
?>