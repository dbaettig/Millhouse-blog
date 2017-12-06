<?php

include 'partials/database.php';
  
$limit = 5;  
if(isset($_GET["page"])) {
	$page  = $_GET["page"]; 
} else { 
	$page=1; 
};  
$start_from = ($page-1) * $limit;  
$statement = $pdo->prepare("SELECT * FROM posts order by postID DESC LIMIT $start_from, $limit"); 
$statement->execute(); 
$blog = $statement->fetchAll(PDO::FETCH_ASSOC);
