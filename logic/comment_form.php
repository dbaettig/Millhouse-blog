<?php
require '../partials/session.php';
require '../partials/database.php';

/*Form to make a commet*/



$new_comment = $pdo->prepare(
	"INSERT INTO comments (postID, userID, name, email, comment, created)
	VALUES (:postID, :userID, :name, :email, :comment, NOW())"
);


$new_comment->execute(array(
	":postID" => $_POST['postID'],
	":userID" => $_POST['userID'],
	":name" => $_POST['name'],
	":email" => $_POST['email'],
	":comment" => $_POST['comment']
));

$id = $_POST['postID'];
header("Location:../single_post.php?postID=".$id);


?>


