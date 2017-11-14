<?php
session_start();
require "database.php";


$new_comment = $pdo->prepare(
	"INSERT INTO comments (postID, name, email, comment, created)
	VALUES (:postID, :name, :email, :comment, NOW())"
);


$new_comment->execute(array(
	":postID" => $_POST['postID'],
	//":userID" => $_SESSION['user']['id'],
	":name" => $_POST['name'],
	":email" => $_POST['email'],
	":comment" => $_POST['comment']
));

header("Location:index.php");
?>
