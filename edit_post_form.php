<?php
session_start();
require 'database.php';

if( !empty($_FILES["uploaded_file"]["name"]) ){
	
	require 'resize_image.php';
	
	$update_post = $pdo->prepare(
		"UPDATE posts SET 
		title = :title, 
		post = :post,
		image = :image,
		category = :category
		WHERE postID = :postID"
		);

	$update_post->execute(array(
		":postID" => $_POST['postID'],
		":title" => $_POST['title'],
		":post" => $_POST['text'],
		":image" => "resized/" . $filename,
		":category" => $_POST['category']
	));
} else {
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
}

header("Location:single_post.php?postID=" . $_POST['postID']);