<?php
session_start();
require 'database.php';

$statement = $pdo->prepare("DELETE * FROM posts WHERE postID = :postID");

$statement->execute(array(":postID" => $_GET["postID"]));

header("Location: index.php");
?>