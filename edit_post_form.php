<?php
session_start();
require 'database.php';

$update_post = $pdo->prepare(
	"UPDATE posts SET 
	title = :title, 
	post = :post,
	category = :category
	WHERE postID = :postID"
	);

$update_post->execute(array(
	":postID" => $_POST['postID'],
	":title" => $_POST['title'],
	":post" => $_POST['text'],
	":category" => $_POST['category']
));

header("Location:index.php");