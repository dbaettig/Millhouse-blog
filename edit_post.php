<?php
require 'partials/session.php';
require 'partials/database.php';
require 'partials/head.php';

	$statement = $pdo->prepare( 
		"SELECT * FROM posts WHERE postID = :postID");

	$statement->execute(array(
		":postID" => $_GET["postID"]
	));
	$single_post = $statement->fetchAll(PDO::FETCH_ASSOC);

foreach($single_post as $blogpost) { ?>
	<body>
	<?php require 'partials/header.php' ?>
	<main>
		
	<div class="wrapper">
		<div class="container">
        <form class="form_newpost" action="logic/edit_post_form.php" method="POST" enctype="multipart/form-data">
          <input class="input_title" type="hidden" name="postID" value="<?= $blogpost['postID']; ?>">
          <label for="title" class="doNotShow">Title</label>
          <input class="input_title" id="title" type="text" name="title" value="<?= $blogpost['title']; ?>"><br/>
          
          <label for="editor" class="doNotShow">Edit your post here</label>
          <textarea class="textarea" name="text" id="editor" rows="30">
            <?= $blogpost['post']; ?>
          </textarea> <br/>

          <label for="uploaded_file"><?= $blogpost['image']?></label>
          <input class="uploadFileInput input_newpost" id="uploaded_file" type="file" name="uploaded_file">
            
          <!--<button class="uploadFileButton">Select File</button> -->
          <small class="left">JPEG, Recommended file size 1000px x 564px.</small><br/><br/>

           <input class ="image_text" type="text" name="alt_text" 
           value="<?= $blogpost['alt_text']; ?>" placeholder="image description" required>
           
          <h4>Choose category</h4>
          <div class="buttons">
             <div class="select_button">
              <select class="select" name="category">
              
                <option value="news" <?php if($blogpost['category'] == 'news' ) { echo "selected='selected'"; }?> >News</option>
                <option value="style" <?php if($blogpost['category'] == 'style' ) { echo "selected='selected'"; }?> >Style</option>
                <option value="interior" <?php if($blogpost['category'] == 'interior' ) { echo "selected='selected'"; }?>>Interior</option>
                <option value="featured" <?php if($blogpost['category'] == 'featured' ) { echo "selected='selected'"; }?>>Featured</option>
               </select>
            </div> <!-- .select_button -->

            <div class="publish_button">
              <input class="button button_large button_turquoise" type="submit" name="submit" value="Update">
            </div> <!-- .publish_button -->

          </div> <!-- .buttons -->

			</form>
		</div> <!-- .container -->
	</div> <!-- .wrapper -->
    
		<!--<script>
			$('.uploadFileButton').on('click', function(){
				$('.uploadFileInput').trigger('click'); 
			});
		</script>-->
<?php 
}
require 'partials/footer.php'; ?>