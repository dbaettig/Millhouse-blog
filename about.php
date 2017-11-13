<?php
session_start();
require 'header.php';
?>

<style>
	
	.about_image_wrapper {
		width: 60%;
		margin: 0px auto;
	}
	
	.about_image {
		width: 100%;
	}
	
	.about_text_wrapper {
		width: 55%;
		margin: 0px auto;
	}
</style>

<div class="about_wrapper">
<div class="about_image_wrapper">
<img class= "about_image" src="img/watch2.jpeg">
</div>

<div class="about_text_wrapper">
<p>In this blog we at Millhouse write about topics that affect the company Millhouse and the line of business we are in. Everything from big events to small anecdotes you may not be able to read about anywhere else. 
<br/>
Millhouse was founded 60 years ago by Millhouse Simpson. His idea was that men and women everywhere should have the possibility to be welldresses to a reasonable price.
<br/>
Millhouse Simpsons successful business revolutionized the clothing trade and his thinking still affects many fashion campanies as of today.</p>
</div>
</div>

<?php
require 'footer.php';
?>