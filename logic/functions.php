<?php

 /*FUNCTIONS*/ 
	function postamount() {
	require 'partials/database.php';
	$statement = $pdo->prepare("SELECT COUNT(*) FROM posts");
	$statement->execute();
	$count = $statement->fetch(PDO::FETCH_ASSOC);
	foreach($count as $c) {
		return $c;
	}
}