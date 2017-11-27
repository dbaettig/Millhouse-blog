<?php 
require '../partials/session.php';
require("../partials/database.php");

$path = $_FILES["uploaded_file"]["tmp_name"];
$filename = $_FILES["uploaded_file"]["name"];

move_uploaded_file($path, "../img/" . $filename);

$profilepic = $pdo->prepare(
	"UPDATE users 
	SET profilepic = :profilepic
	WHERE id = :userID"
);

$profilepic->execute(array(
	":profilepic" => "profilepics/" . $filename,
	"userID" => $_SESSION['user']['id']
));

//Create image resize function
function resize_profilepic($file, $new_width, $new_height) {
	
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
$file = "../img/" . $filename;

$info = getimagesize($file);
$width = $info[0]; //first value in $info array is width
$height = $info[1]; //second is height

//Calculate the ratio between width and height
$ratio = $height / $width;

//calcualate the new height in relation to the fixed with in order to resize proportionally
$new_width = 400;
$new_height = $new_width * $ratio;

$resized_image = resize_profilepic("../img/" . $filename, $new_width, $new_height);

//Save the image to disk
imagejpeg($resized_image, "../profilepics/" . $filename, 100);


 header("Location:../profile.php");