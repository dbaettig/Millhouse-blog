<?php
require 'partials/session.php';
require 'partials/head.php';
require 'partials/database.php';

$allComments = $pdo->prepare("SELECT * 
	   FROM comments
	   JOIN posts ON comments.postID = posts.postID
	   WHERE comments.userID = :userID 
	   ORDER BY commentID DESC ");
       $allComments->execute(array(
       ":userID" => $_SESSION["user"]["id"]
   )); 
       $allMyComments = $allComments ->fetchAll(PDO::FETCH_ASSOC);

?>


<body id="profile">
		<?php require 'partials/header.php';?>
		<main class="profile_main" role="main">

			<div class="profileWrapper">
			<h1>All my comments</h1>
			<p><a href="profile.php">Back to profile page.</a></p>
			<br/>
			
			<ul>
	<?php
	foreach($allMyComments as $oneOfMyComments) { ?>

							<li>
								<p>"
								<?= $oneOfMyComments['comment'] ?>"
							<br/>on
								<a href="single_post.php?postID=<?= $oneOfMyComments['postID'] ?>">
									<?= $oneOfMyComments['title'] ?>
								</a> by
								<?= $oneOfMyComments['name'] ?>
							</p>
							<br/>
								<small><?= $oneOfMyComments['created'] ?></small>
							</li>

							<?php } ?>
							</ul>
			</div>	
<?php
require 'partials/footer.php';
?>