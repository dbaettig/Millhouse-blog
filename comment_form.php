<?php
require 'session.php';
require 'database.php';

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

var_dump($_POST['postID']);
var_dump($_POST['userID']);
var_dump($_POST['name']);
var_dump($_POST['email']);
var_dump($_POST['comment']);

header("Location:single_post.php?postID=".$id);
?>
