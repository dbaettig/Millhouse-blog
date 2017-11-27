<?php 

/*Fetch single post*/
$statement = $pdo->prepare("SELECT * 
	FROM posts 
	JOIN users ON posts.userID = users.id 
	WHERE posts.postID = :postID 
	");
	$statement->execute(array(
		":postID" => $_GET["postID"]
	));
	$single_post = $statement->fetchAll(PDO::FETCH_ASSOC);


	$statementcomments = $pdo->prepare("SELECT COUNT(*) FROM comments where postID = :postID");
       $statementcomments->execute(array(
       ":postID" => $_GET["postID"]
   ));
       $comments_toPosts = $statementcomments->fetch(PDO::FETCH_ASSOC);



/*Fetch comments for single post*/
    $statement = $pdo->prepare("SELECT * FROM comments  
		WHERE postID = :postID
		ORDER BY commentID DESC");
					   
		$statement->execute(array(
			":postID" => $_GET["postID"]
		));
		$comments = $statement->fetchAll(PDO::FETCH_ASSOC);
					   