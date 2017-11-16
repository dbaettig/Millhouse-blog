<?php 
session_start();
$message = urlencode("You need to write something in every field");

if(empty($_POST["title"] || $_POST["text"])){    
    header("Location: new_post.php?message=".$message);
} else {
require("database.php");
}

$path = $_FILES["uploaded_file"]["tmp_name"];
$filename = $_FILES["uploaded_file"]["name"];

move_uploaded_file($path, "img/" . $filename);
	
$new_post = $pdo->prepare(
	"INSERT INTO posts (userID, title, post, image, created, category)
	VALUES (:userID, :title, :post, :image, NOW(), :category)"
);

$new_post->execute(array(
	":userID" => $_SESSION['user']['id'],
	":title" => $_POST['title'],
	":post" => $_POST['text'],
	":image" => "img/" . $filename,
	":category" => $_POST['category']
));
	

//Create image resize function
function resize_image($file, $new_width, $new_height) {
	
  $info = getimagesize($file);
  $width = $info[0]; //first value in $info array is width
  $height = $info[1]; //second is height

  // Save file as variable in PHP, copy the content of the file to $source: 
  // imagecreatefromjpeg() returns an image identifier representing 
  // the image obtained from the given filename.
  
  $source = imagecreatefromjpeg($file);
  // create temporary destination variable with new sizes: 
  // imagecreatetruecolor() returns an image identifier representing 
  // a black image of the specified size.

  $destination = imagecreatetruecolor($new_width, $new_height);
  
  // copy the original source to the new resized $destination
  imagecopyresampled($destination, $source, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
  
  // return the newly created and resized file
  return $destination;
}

/***************************
 *        USE CASE         *
 ***************************/

//Create the new resized image
//first argument is file to convert
//second is width
//third is height
$resized_image = resize_image("img/" . $filename, 1920, 1080);
//Save the image to disk
imagejpeg($resized_image, "resized/" . $filename, 100);

header("Location:index.php");