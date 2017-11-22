<?php 
require 'session.php';
require 'head.php';
?>

<body id="new_post">
<?php require 'navbar.php'; ?>
	<main>

		<div class="wrapper">

			<div class="container">
				<form action="post_form.php" method="POST" enctype="multipart/form-data">
					<input type="text" name="title" placeholder="title"> <br/>
					<textarea name="text" id="editor" placeholder="Write your post..." rows="30"></textarea> <br/>

					<input type="file" name="uploaded_file"><small style="text-align:left;">JPEG, Recommended file size 1920px x 1080px.</small><br><br>

					<select name="category">
				<option value="category">Choose category...</option>

				<option value="news">News</option>
				<option value="style">Style</option>
				<option value="interior">Interior</option>
				<option value="featured">Featured</option>
			</select>
					<br><br>
					<input type="submit" name="submit" value="Publish">
				</form>
			</div>
		</div>
		<?php require 'footer.php'; ?>