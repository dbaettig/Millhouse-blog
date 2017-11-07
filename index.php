<?php
session_start();

require 'database.php';
require 'header.php';

$statement = $pdo->prepare("SELECT * FROM posts ORDER BY created DESC");
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

<?php

foreach($blog as $blogpost) {
	echo $blogpost['title'] . '<br/>' . $blogpost['post'] . '<br/>' . 
		$blogpost['category'] . '<br/>' . $blogpost['created'] . '<br/>' . $blogpost['userID'] . '<br/>';
}

?>

	

<?php
require 'footer.php';
?>