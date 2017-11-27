<?php
require "partials/database.php";

/*Fetch all posts*/

       $statement1 = $pdo->prepare("SELECT COUNT(*) FROM posts where userID = :userID");
       $statement1->execute(array(
       ":userID" => $_SESSION["user"]["id"]
   ));
       $count1 = $statement1->fetch(PDO::FETCH_ASSOC);
    

       /*Fetch five latest posts*/
       $statement2 = $pdo->prepare("SELECT title, post, created 
	   FROM posts
	   INNER JOIN users ON posts.userID = users.id
	   WHERE userID = :userID 
	   ORDER BY postID DESC 
	   LIMIT 5");
       $statement2->execute(array(
       ":userID" => $_SESSION["user"]["id"]
   ));  
       $count2 = $statement2 ->fetchAll(PDO::FETCH_ASSOC);

       /*Fetch all comments */

       $statement3 = $pdo->prepare("SELECT COUNT(*) FROM comments where userID = :userID");
       $statement3->execute(array(
       ":userID" => $_SESSION["user"]["id"]
   ));
       $count3 = $statement3->fetch(PDO::FETCH_ASSOC);
       
       /*Fetch five latest comments*/
       $statement4 = $pdo->prepare("SELECT * 
	   FROM comments
	   JOIN posts ON comments.postID = posts.postID
	   WHERE comments.userID = :userID 
	   ORDER BY commentID DESC 
	   LIMIT 5");
       $statement4->execute(array(
       ":userID" => $_SESSION["user"]["id"]
   )); 
         $count4 = $statement4->fetchAll(PDO::FETCH_ASSOC);

/*Fetch profile pic*/
$userInfo = $pdo->prepare("SELECT * FROM users
WHERE id = :userID");
$userInfo->execute(array(
":userID" => $_SESSION['user']['id']));
$info = $userInfo ->fetchALL(PDO::FETCH_ASSOC);