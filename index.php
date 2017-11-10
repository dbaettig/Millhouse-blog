<?php
session_start();

require 'database.php';
require 'header.php';

$statement = $pdo->prepare("SELECT * FROM posts
INNER JOIN users ON posts.userID = users.id");
$statement->execute();
$blog = $statement ->fetchALL(PDO::FETCH_ASSOC);
?>

	<div class="posts">
		<?php
			foreach($blog as $blogpost) { ?>
				<div class="each"> <? echo $blogpost['title'] . '<br/>' . $blogpost['post'] . '<br/>' . 
				$blogpost['category'] . '<br/>' . $blogpost['created'] . '<br/>' . $blogpost['username'] . '<br/>';
			} ?>
			</div>
	</div>

<?php
	require 'footer.php';
?>