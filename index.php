<?php
session_start();

require 'database.php';
require 'header.php';

$statement = $pdo->prepare("SELECT * FROM posts
INNER JOIN users ON posts.userID = users.id");
$statement->execute();
$blog = $statement ->fetchALL(PDO::FETCH_ASSOC);


if(isset($_SESSION["user"])){
echo "Du är nu inloggad" . "</br>" .
$_SESSION["user"]["username"];
}
?>
<br/>
<a href="logout.php">logout</a> 
<br/>
<br/>

<div class="posts">

<?php

foreach($blog as $blogpost) { ?>
	<div class="each"> <? echo $blogpost['title'] . '<br/>' . $blogpost['post'] . '<br/>' . 
		$blogpost['category'] . '<br/>' . $blogpost['created'] . '<br/>' . $blogpost['username'] . '<br/>';
}
?>
</div>

</div>

<?php
require 'footer.php';
?>