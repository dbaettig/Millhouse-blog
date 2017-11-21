<?php
require 'database.php';

$new_comment = $pdo->prepare(
	"INSERT INTO comments (postID, name, email, comment, created)
	VALUES (:postID, :name, :email, :comment, NOW())"
);


$new_comment->execute(array(
	":postID" => $_POST['postID'],
	":name" => $_POST['name'],
	":email" => $_POST['email'],
	":comment" => $_POST['comment']
));

$id = $_POST['postID'];

header("Location:single_post.php?postID=".$id);
?>
