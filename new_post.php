<?php 
session_start();
require 'header.php'; ?>

<div class="wrapper">

	<div class="container">
		<form action="post_form.php" method="POST" enctype="multipart/form-data">
			<input type="text" name="title" placeholder="title"> <br/>
			<textarea name="text" id="editor" placeholder="Write your post..." rows="30"></textarea> <br/>

			<input type="file" name="uploaded_file">
			
			<select name="category">
				<option value="category">Choose category...</option>
				<option value="news">News</option>
				<option value="style">Style</option>
				<option value="interior">Interior</option>
				<option value="featured">Featured</option>
			</select>
			<br />
			<input type="submit" name="submit" value="Publish">
		</form>
	</div>
</div>
<?php require 'footer.php'; ?>