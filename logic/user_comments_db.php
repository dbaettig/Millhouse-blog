<?php

$allComments = $pdo->prepare("SELECT * 
	   FROM comments
	   JOIN posts ON comments.postID = posts.postID
	   WHERE comments.userID = :userID 
	   ORDER BY commentID DESC ");
       $allComments->execute(array(
       ":userID" => $_SESSION["user"]["id"]
   )); 
       $allMyComments = $allComments ->fetchAll(PDO::FETCH_ASSOC);