<?php
require "database.php";

/*Här hämtas antal inlägg */

       $statement1 = $pdo->prepare("SELECT COUNT(*) FROM posts where userID = :userID");
       $statement1->execute(array(
       ":userID" => $_SESSION["user"]["id"]
   ));
       $count1 = $statement1->fetch(PDO::FETCH_ASSOC);
    

       /*Här hämtas senaste inläggen*/
       $statement2 = $pdo->prepare("SELECT title, post,created FROM posts WHERE userID = :userID ORDER BY postID DESC LIMIT 5");
       $statement2->execute(array(
       ":userID" => $_SESSION["user"]["id"]
   ));

       $statement2 = $pdo->prepare("SELECT * FROM posts
		INNER JOIN users ON posts.userID = users.id");
		$statement2 ->execute();
         
       $count2 = $statement2 ->fetchAll(PDO::FETCH_ASSOC);

       /*Här hämtas antal kommentarer */

       $statement3 = $pdo->prepare("SELECT COUNT(*) FROM comments where userID = :userID");
       $statement3->execute(array(
       ":userID" => $_SESSION["user"]["id"]
   ));
       $count3 = $statement3->fetch(PDO::FETCH_ASSOC);
       
       /*Här hämtas de fem senaste kommentarerna*/
       $statement4 = $pdo->prepare("SELECT * FROM comments where userID = :userID order by commentID DESC LIMIT 5");
       $statement4->execute(array(
       ":userID" => $_SESSION["user"]["id"]
   )); 
         $count4 = $statement4->fetchAll(PDO::FETCH_ASSOC);
