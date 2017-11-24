<?php
require 'session.php';
require 'head.php';
require 'database.php';

$allposts = $pdo->prepare("SELECT title, post, created 
	   FROM posts
	   INNER JOIN users ON posts.userID = users.id
	   WHERE userID = :userID 
	   ORDER BY postID DESC");
       $allposts->execute(array(
       ":userID" => $_SESSION["user"]["id"]
   ));  
       $allMyPosts = $allposts ->fetchAll(PDO::FETCH_ASSOC);

?>


<body id="profile">
		<?php require 'navbar.php';?>
		<main class="profile_main" role="main">

			<div class="profileWrapper">
			
			<h1>All my posts</h1>
			<p><a href="profile.php">Back to profile page.</a></p>
			<br/>
			
			<ul>
	<?php
	foreach($allMyPosts as $oneOfMyPosts) { ?>

							<li>
								<a href="single_post.php?postID=<?= $oneOfMyPosts['postID'] ?>">
									<?= $oneOfMyPosts['title'] ?>
							</a>
								<small><?= $oneOfMyPosts['created'] ?></small>
							</li>

							<?php } ?>
							</ul>
			</div>	
<?php
require 'footer.php';
?>