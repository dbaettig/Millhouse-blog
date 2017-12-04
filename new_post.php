<?php 
require 'partials/session.php';
require 'partials/head.php';
?>

<body id="new_post">
<?php require 'partials/header.php'; ?>
<main role="main">

		<div class="wrapper">
			<div class="container">
       
				<h1 class="newpost_headline">Create post</h1>
        
          <form class="form_newpost" action="logic/post_form.php" method="POST" enctype="multipart/form-data">

            <label for="text" class="doNotShow">Title</label><input class="input_title" id="title" type="text" name="title" placeholder="title"> <br/>
            <label for="editor" class="doNotShow">Write your post here</label><textarea class="textarea" name="text" id="editor" placeholder="Write your post..." rows="30"></textarea> <br/>
            <input class="input_newpost" type="file" name="uploaded_file"><small style="text-align:left;">JPEG, Recommended file size 1000px x 564px.</small><br/><br/>

				<div class="buttons">
					<div class="select_button">
					  <select class="select" name="category">
						 <option value="category">Choose category...</option>
						 <option value="news">News</option>
						 <option value="style">Style</option>
						 <option value="interior">Interior</option>
						 <option value="featured">Featured</option>
					  </select>
					</div> <!-- .select_buttons -->

				  <div class="publish_button">
					 <input class="input_newpost" type="submit" name="submit" value="Publish">
				  </div>
				</div> <!-- .buttons -->
			</form>
		</div> <!-- .container -->
	</div> <!-- .wrapper -->

<?php require 'partials/footer.php'; ?>