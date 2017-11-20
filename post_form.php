<?php 
session_start();
$message = urlencode("You need to write something in every field");

if(empty($_POST["title"] || $_POST["text"])){    
    header("Location: new_post.php?message=".$message);
} else {
require("database.php");
}

require 'resize_image.php';

header("Location:index.php");