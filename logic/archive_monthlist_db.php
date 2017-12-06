<?php
require 'partials/database.php';
?>

<?php
	//Här ska jag loopa ut alla månader som finns i posts-tabellen i databasen 

	$statement = $pdo->prepare("
	SELECT created
	FROM posts
	GROUP BY MONTH(created)
	ORDER BY created DESC
	");


//ORDER BY created DESC
//GROUP BY MONTH(created) + '.' + YEAR(created)
	$statement->execute();
	$archive_monthlist = $statement->fetchAll(PDO::FETCH_ASSOC);
