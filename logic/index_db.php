<?php

$limit = 5;  
if(isset($_GET["page"])) {
	$page  = $_GET["page"]; 
} else { 
	$page=1; 
};  
$start = ($page-1) * $limit;  
$statement = $pdo->prepare("SELECT * FROM posts
INNER JOIN users ON posts.userID = users.id
ORDER BY postID DESC LIMIT $start, $limit");
$statement->execute();
$blog = $statement ->fetchALL(PDO::FETCH_ASSOC);


$statementcomments = $pdo->prepare("SELECT COUNT(comments.commentID) as number_of_comments, posts.postID FROM comments 
	RIGHT JOIN posts 
	ON posts.postID = comments.postID
    	GROUP BY posts.postID"); 
       $statementcomments->execute();

       $comments_toPosts = $statementcomments->fetchAll(PDO::FETCH_ASSOC);

