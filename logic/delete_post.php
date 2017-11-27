<?php
require '../partials/session.php';

require '../partials/database.php';


$statement = $pdo->prepare("DELETE posts, comments
FROM posts
INNER JOIN comments ON comments.postID = posts.postID
WHERE posts.postID = :postID");

$statement->execute(array(":postID" => $_GET["postID"]));

header("Location:../index.php");





?>