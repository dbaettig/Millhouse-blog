<?php
require 'partials/session.php';
require 'partials/head.php';
require 'partials/database.php';
?>

<body id="archive">
	<?php require 'partials/header.php';?>
	<main class="profile_main" role="main">
		<div class="profileWrapper">
			
			<h1>
				<?= $_GET['month'] ?>
			</h1>
			<br/>
			<ul>
			<?php
				
			/*Fetch users posts*/
			$statement = $pdo->prepare("
				SELECT title, post, created 
				FROM posts
				WHERE created > '2017/11/01' AND created < '2017/11/30'
				ORDER BY postID DESC");
				$statement->execute();
				$posts_per_month = $statement->fetchAll(PDO::FETCH_ASSOC);
				
				foreach($posts_per_month as $post_single_month) { ?>
					<li class="post">
						<a href="single_post.php?postID=<?= $post_single_month['postID'] ?>">
							<?= $post_single_month['title'] ?>
						</a>
						<small><?= $post_single_month['created'] ?></small><br/>
					</li>
				<?php } //close foreach 
				?> 
			</ul>
		</div>

<?php
require 'partials/footer.php';
?>