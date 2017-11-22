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
			<form action="edit_post_form.php" method="POST" enctype="multipart/form-data">
				<input type="hidden" name="postID" value="<?= $blogpost['postID']; ?>">
				<input type="text" name="title" value="<?= $blogpost['title']; ?>"><br/>
				<textarea name="text" id="editor" rows="30">
					<?= $blogpost['post']; ?>
				</textarea> <br/>

				<label for="uploaded_file"><?= $blogpost['image']?></label>
				<input class="uploadFileInput" type="file" name="uploaded_file" value="<?= $blogpost['image']?>" style="display:none;">
				<button class="uploadFileButton">Select File</button>
				
				<small style="text-align:left;">JPEG, Recommended file size 1000px x 564px.</small><br><br>

				<select name="category" value="<?= $blogpost['category']; ?>">
					<option value="category" <?php if($blogpost['category'] == 'category' ) { echo "selected='selected'"; }?> >Choose category...</option>
					<option value="news" <?php if($blogpost['category'] == 'news' ) { echo "selected='selected'"; }?> >News</option>
					<option value="style" <?php if($blogpost['category'] == 'style' ) { echo "selected='selected'"; }?> >Style</option>
					<option value="interior" <?php if($blogpost['category'] == 'interior' ) { echo "selected='selected'"; }?>>Interior</option>
					<option value="featured" <?php if($blogpost['category'] == 'featured' ) { echo "selected='selected'"; }?>>Featured</option>
				</select>
				<br><br>
				<input type="submit" name="submit" value="Update">
			</form>
		</div>
	</div>
		<script>
			$('.uploadFileButton').on('click', function(){
				$('.uploadFileInput').trigger('click'); 
			});
		</script>
<?php 
}
require 'footer.php'; ?>