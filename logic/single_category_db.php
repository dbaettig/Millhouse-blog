<?php

/*sorting on category */
if (isset ($_GET["news"])){
    
$statement = $pdo->prepare("SELECT * FROM posts INNER JOIN users ON posts.userID = users.id
WHERE category = 'news'");
$statement->execute();
$blog = $statement ->fetchALL(PDO::FETCH_ASSOC);

}

if (isset ($_GET["style"])){
    
$statement = $pdo->prepare("SELECT * FROM posts INNER JOIN users ON posts.userID = users.id
WHERE category = 'style'");
$statement->execute();
$blog = $statement ->fetchALL(PDO::FETCH_ASSOC);
    
}

if (isset ($_GET["interior"])){
    
$statement = $pdo->prepare("SELECT * FROM posts INNER JOIN users ON posts.userID = users.id
WHERE category = 'interior'");
$statement->execute();
$blog = $statement ->fetchALL(PDO::FETCH_ASSOC);
}

if (isset ($_GET["featured"])){
    
$statement = $pdo->prepare("SELECT * FROM posts INNER JOIN users ON posts.userID = users.id
WHERE category = 'featured' ORDER BY postID DESC");
$statement->execute();
$blog = $statement ->fetchALL(PDO::FETCH_ASSOC);
}
