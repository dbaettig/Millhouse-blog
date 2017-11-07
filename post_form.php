<?php 
session_start();
$message = urlencode("You need to write something in every field");

if(empty($_POST["title"] || $_POST["text"])){    
    header("Location: new_post.php?message=".$message);
}
else {
require("database.php");

$new_post = $pdo->prepare(
    "INSERT INTO posts (title, post, created, category)
    VALUES (:title, :post, NOW(), :category)"
);

$new_post->execute(array(
//    ":userID" => $_SESSION['user'],
    ":title" => $_POST['title'],
    ":post" => $_POST['text'],
	":category" => $_POST['category']
));

}
