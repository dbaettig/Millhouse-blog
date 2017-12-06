<?php
require 'partials/database.php';
?>

<?php
	//Get all months where there are posts in the database
	$statement = $pdo->prepare("
	SELECT created
	FROM posts
	GROUP BY MONTH(created), YEAR(created)
	ORDER BY created DESC
	");

	$statement->execute();
	$archive_monthlist = $statement->fetchAll(PDO::FETCH_ASSOC);
