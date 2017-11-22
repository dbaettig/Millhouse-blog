<?php 
require 'session.php';
require 'head.php';
?>

<body id="new_post">
<?php require 'navbar.php'; ?>
	<mai role="main"n>

		<div class="wrapper">

			<div class="container">
				<h1 class="newpost_headline">Create post</h1>
				<form class="form_newpost" action="post_form.php" method="POST" enctype="multipart/form-data">
					<input class="input_title" type="text" name="title" placeholder="title"> <br/>
					<textarea class="textarea" name="text" id="editor" placeholder="Write your post..." rows="30"></textarea> <br/>

					<input class="input_newpost" type="file" name="uploaded_file"><small style="text-align:left;">JPEG, Recommended file size 1920px x 1080px.</small><br><br>
					<div class="buttons">
					<div class="select_button">
					<select class="select" name="category">
				<option value="category">Choose category...</option>

				<option value="news">News</option>
				<option value="style">Style</option>
				<option value="interior">Interior</option>
				<option value="featured">Featured</option>
			</select>
			</div>
					<div class="publish_button">
					<input class="input_newpost" type="submit" name="submit" value="Publish">
					</div>
				</div>
				</form>
			</div>
		</div>
		<?php require 'footer.php'; ?>