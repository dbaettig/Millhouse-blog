<?php 

/*Fetch users posts*/
$allposts = $pdo->prepare("SELECT title, post, created, postID
	   FROM posts
	   INNER JOIN users ON posts.userID = users.id
	   WHERE userID = :userID 
	   ORDER BY postID DESC");
       $allposts->execute(array(
       ":userID" => $_SESSION["user"]["id"]
   ));  
       $allMyPosts = $allposts ->fetchAll(PDO::FETCH_ASSOC);