<?php
require 'partials/head.php';
require 'partials/database.php';
//require 'partials/session.php';
?>

<body id="archive">
	<?php require 'partials/header.php'; ?>
	
	<main class="profile_main" role="main">
		<div class="profileWrapper">
			
			<h1><?= $_GET['month'] ?></h1><br/>
			
			<?php 
				//Split up month_year into a separate month and year
				$month_year = date_create(urldecode($_GET['month']));
				$month = date_format($month_year, 'F');
				$year = date_format($month_year, 'Y');
			?>
			
			
			<ul>
			<?php
				$statement = $pdo->prepare("
				SELECT postID, title, post, created
				FROM posts
				WHERE monthname(created) = :month AND year(created) = :year
				ORDER BY created DESC
				");
				
				//GROUP BY MONTH(created)
				$statement->execute(array(
					":month" => $month,
					":year" => $year
				));
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