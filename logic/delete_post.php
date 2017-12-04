<?php
require '../partials/session.php';

require '../partials/database.php';


$statement = $pdo->prepare("DELETE FROM posts
WHERE postID = :postID");

$statement->execute(array(":postID" => $_GET["postID"]));

$statement = $pdo->prepare("DELETE FROM comments
WHERE postID = :postID");

$statement->execute(array(":postID" => $_GET["postID"]));

header("Location:../index.php");





?>