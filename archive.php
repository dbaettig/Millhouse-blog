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
				require 'logic/archive_db.php';
				foreach($posts_per_month as $post_single_month) { ?>
					<li class="post">
						<a href="single_post.php?postID=<?= $post_single_month['postID'] ?>">
							<?= $post_single_month['title'] ?>
						</a>
						<small>
						in <a href="single_category.php?<?= $post_single_month['category'] ?>">
								<?= $post_single_month['category'] ?>
							</a>
							<i class="fa fa-circle" aria-hidden="true"></i>
							<?= $post_single_month['created'] ?></small><br/>
					</li>
				<?php } //close foreach 
				?> 
			</ul>
		</div>

<?php
require 'partials/footer.php';
?>