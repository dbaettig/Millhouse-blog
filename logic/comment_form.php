<?php
require '../partials/session.php';
require '../partials/database.php';

/*Form to make a comment*/


if(isset($_POST['name'], $_POST['comment'], $_POST['email']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
$new_comment = $pdo->prepare(
	"INSERT INTO comments (postID, userID, name, email, comment, created)
	VALUES (:postID, :userID, :name, :email, :comment, NOW())"
);


$new_comment->execute(array(
	":postID" => $_POST['postID'],
	":userID" => $_POST['userID'],
	":name" => $_POST['name'],
	":email" => $_POST['email'],
	":comment" => $_POST['comment']
));

$id = $_POST['postID'];
$message = ' ';
header("Location:../single_post.php?postID=".$id . "&validemail=" . urlencode($message));

}

else {
	$message = 'Please enter a valid email.';
    header("Location: ../single_post.php?postID=".$_POST['postID']. "&validemail=" . urlencode($message));
    }
?>
