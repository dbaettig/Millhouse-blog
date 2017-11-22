<?php
session_start();
require 'database.php';
require 'head.php';

	$statement = $pdo->prepare( 
		"SELECT * FROM posts WHERE postID = :postID");

	$statement->execute(array(
		":postID" => $_GET["postID"]
	));
	$single_post = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach($single_post as $blogpost) { ?>
	<body>
	<?php require 'navbar.php' ?>
	<main>
		
	<div class="wrapper">
		<div class="container">
			<form class="form_newpost" action="edit_post_form.php" method="POST" enctype="multipart/form-data">
				<input class="input_title" type="hidden" name="postID" value="<?= $blogpost['postID']; ?>">
				<input class="input_title" type="text" name="title" value="<?= $blogpost['title']; ?>"><br/>
				<textarea class="textarea" name="text" id="editor" rows="30">
					<?= $blogpost['post']; ?>
				</textarea> <br/>
				<label for="uploaded_file"><?= $blogpost['image']?></label>
				<input class="input_newpost" type="file" name="uploaded_file">
				
				<small style="text-align:left;">JPEG, Recommended file size 1000px x 564px.</small><br><br>

<div class="buttons">
	<div class="select_button">
				<select class="select" name="category" value="<?= $blogpost['category']; ?>">
					<option value="category">Choose category...</option>
					<option value="news">News</option>
					<option value="style">Style</option>
					<option value="interior">Interior</option>
					<option value="featured">Featured</option>
				</select>
			</div>
				<br><br>
				<div class="publish_button">
				<input class="input_newpost" type="submit" name="submit" value="Update">
			</div>
			</div>
			</form>
		</div>
	</div>
<?php 
}
require 'footer.php'; ?>