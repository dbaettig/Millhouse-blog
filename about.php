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
<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. 
<br/>
Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. 
<br/>
Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
</div>
</div>

<?php
require 'footer.php';
?>