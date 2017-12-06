<?php 
foreach ($archive_monthlist as $month) {
		$date = date_create($month['created']);
		$month_year = date_format($date, 'F' . ' ' . 'Y');
		?>
		<p>
			<a href="archive.php?<?= urlencode($month_year)?>">
				<?= $month_year ?>
			</a>
		</p>
<?php } 

?>