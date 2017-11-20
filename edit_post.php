<?php
session_start();
require 'database.php';
require 'header.php';

	$statement = $pdo->prepare( 
		"SELECT * FROM posts WHERE postID = :postID");

	$statement->execute(array(
		":postID" => $_GET["postID"]
	));
	$single_post = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach($single_post as $blogpost) { ?>
	<div class="wrapper">
		<div class="container">
			<form action="edit_post_form.php" method="POST" enctype="multipart/form-data">
				<input type="text" name="title" value="<?= $blogpost['title']; ?>"><br/>
				<textarea name="text" id="editor" rows="30">
					<?= $blogpost['post']; ?>
				</textarea> <br/>


				<input type="file" name="uploaded_file" value="<?= $blogpost['image']; ?>">
				
				<small style="text-align:left;">JPEG, Recommended file size 1000px x 564px.</small><br><br>


				<select name="category" value="<?= $blogpost['category']; ?>">
					<option value="category">Choose category...</option>
					<option value="news">News</option>
					<option value="style">Style</option>
					<option value="interior">Interior</option>
					<option value="featured">Featured</option>
				</select>
				<br><br>
				<input type="submit" name="submit" value="Update">
			</form>
		</div>
	</div>
<?php 
}
require 'footer.php'; ?>