<?php 
foreach ($archive_monthlist as $month) { ?>
	<p>
		<?php 
			$date = date_create($month['created']);			  
			echo date_format($date, 'F' . ' ' . 'Y');
		?> 
	</p>
<?php } ?>