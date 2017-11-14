<?php
session_start();
require "header.php";
require "database.php";
?>
	<div class="wrapper">
		<?php
	
	$statement = $pdo->prepare("SELECT * 
	FROM posts 
	JOIN users ON posts.userID = users.id 
	WHERE posts.postID = :postid 
	");
	$statement->execute(array(
		":postid" => $_GET["postid"]
	));
	$single_post = $statement->fetchAll(PDO::FETCH_ASSOC);
		
foreach($single_post as $blogpost) { 
 ?>
			<div class="blogpost">

				<h2>
					<?=$blogpost['title']?>
				</h2>
				</a>
				<small>
							By <?=  $blogpost['username'] ?> in
								<?= $blogpost['category'] ?> 
								<?= $blogpost['created'] ?>
						</small>
			</div>
			<p>
				<?= $blogpost['post'] ?>
			</p>
	</div>
</div>
	<?php }
require "footer.php";
?>