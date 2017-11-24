<?php 
session_start();
require("database.php");

$path = $_FILES["uploaded_file"]["tmp_name"];
$filename = $_FILES["uploaded_file"]["name"];

move_uploaded_file($path, "img/" . $filename);

$profilepic = $pdo->prepare(
	"UPDATE users 
	SET profilepic = :profilepic
	WHERE id = :userID"
);

$profilepic->execute(array(
	":profilepic" => "img/" . $filename,
	"userID" => $_SESSION['user']['id']
));
 header("Location:profile.php");