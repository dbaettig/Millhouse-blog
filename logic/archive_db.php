<?php 

if( isset($_GET['orderby']) &&  $_GET['orderby'] == 'ASC') {
	
		$statement = $pdo->prepare("
			SELECT postID, title, post, category, created
			FROM posts
			WHERE monthname(created) = :month AND year(created) = :year
			ORDER BY created ASC
			");

			//GROUP BY MONTH(created)
			$statement->execute(array(
				":month" => $month,
				":year" => $year
			));

			$posts_per_month = $statement->fetchAll(PDO::FETCH_ASSOC);
		} 

		else {
			$statement = $pdo->prepare("
					SELECT postID, title, post, category, created
					FROM posts
					WHERE monthname(created) = :month AND year(created) = :year
					ORDER BY created DESC
					");

					//GROUP BY MONTH(created)
					$statement->execute(array(
						":month" => $month,
						":year" => $year
					));

					$posts_per_month = $statement->fetchAll(PDO::FETCH_ASSOC);
		}