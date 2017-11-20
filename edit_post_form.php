<?php
session_start();
require 'database.php';

$update_post = $pdo->prepare(
	"UPDATE posts SET 
	title = :title, 
	post = :post,
	category = :category");

$update_post->execute(array(
	":title" => $_POST['title'],
	":post" => $_POST['text'],
	":category" => $_POST['category']
));
//
//header("Location:single_post.php?postID=$_GET['postID']");
header("Location:index.php");