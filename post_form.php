<?php 
session_start();
$message = urlencode("You need to write something in every field");

if(empty($_POST["title"] || $_POST["text"])){    
    header("Location: new_post.php?message=".$message);
} else {
require("database.php");
}
require 'resize_image.php';

$new_post = $pdo->prepare(
	"INSERT INTO posts (userID, title, post, image, created, category)
	VALUES (:userID, :title, :post, :image, NOW(), :category)"
);

$new_post->execute(array(
	":userID" => $_SESSION['user']['id'],
	":title" => $_POST['title'],
	":post" => $_POST['text'],
	":image" => "resized/" . $filename,
	":category" => $_POST['category']
));

$get_newID = $pdo->prepare(
	"SELECT postID FROM posts 
	WHERE title = :title"
);

$get_newID->execute(array(
":title" => $_POST['title']));
$newID = $get_newID ->fetchALL(PDO::FETCH_ASSOC);

header("Location:single_post.php?postID=" . $newID[0]['postID']);