<?php
require '../partials/session.php';
require '../partials/database.php';

/*Edit whole post */

if( !empty($_FILES["uploaded_file"]["name"]) ){
	
	require 'resize_image.php';
	
	$update_post = $pdo->prepare(
		"UPDATE posts SET 
		title = :title, 
		post = :post,
		image = :image,
		category = :category,
        alt_text = :alt_text
		WHERE postID = :postID"
		);

	$update_post->execute(array(
		":postID" => $_POST['postID'],
		":title" => $_POST['title'],
		":post" => $_POST['text'],
		":image" => "resized/" . $filename,
		":category" => $_POST['category'],
        ":alt_text" => $_POST['alt_text'] 
	));
} else {
		$update_post = $pdo->prepare(
		"UPDATE posts SET 
		title = :title, 
		post = :post,
		category = :category,
        alt_text = :alt_text
		WHERE postID = :postID"
		);

	$update_post->execute(array(
		":postID" => $_POST['postID'],
		":title" => $_POST['title'],
		":post" => $_POST['text'],
		":category" => $_POST['category'],
        ":alt_text" => $_POST['alt_text'] 
	));
}

header("Location:../single_post.php?postID=" . $_POST['postID']);
