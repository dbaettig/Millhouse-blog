<?php

/*sorting on category */

if (isset ($_GET["news"])){
    
    $statement = $pdo->prepare("SELECT * FROM posts INNER JOIN users ON posts.userID = users.id
    WHERE category = 'news' ORDER BY postID DESC");
    $statement->execute();
    $blog = $statement ->fetchALL(PDO::FETCH_ASSOC);

}

if(isset($_GET["style"])) {  
    $statement = $pdo->prepare("SELECT * FROM posts INNER JOIN users ON posts.userID = users.id
    WHERE category = 'style' ORDER BY postID DESC");
    $statement->execute();
    $blog = $statement ->fetchALL(PDO::FETCH_ASSOC);

}

 
if (isset ($_GET["interior"])){
    
    $statement = $pdo->prepare("SELECT * FROM posts INNER JOIN users ON posts.userID = users.id
    WHERE category = 'interior' ORDER BY postID DESC");
    $statement->execute();
    $blog = $statement ->fetchALL(PDO::FETCH_ASSOC);

} 

if (isset ($_GET["featured"])){
    
    $statement = $pdo->prepare("SELECT * FROM posts INNER JOIN users ON posts.userID = users.id
    WHERE category = 'featured' ORDER BY postID DESC");
    $statement->execute();
    $blog = $statement ->fetchALL(PDO::FETCH_ASSOC);
}
    

$statementcomments = $pdo->prepare("SELECT COUNT(comments.commentID) as number_of_comments, posts.postID FROM comments 
	RIGHT JOIN posts 
	ON posts.postID = comments.postID
    GROUP BY posts.postID"); 
    $statementcomments->execute();

    $comments_toPosts = $statementcomments->fetchAll(PDO::FETCH_ASSOC);
