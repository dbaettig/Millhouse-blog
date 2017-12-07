<?php 

/*Edit buttons */              
if (isset($_SESSION['user'])) {
    if (($_SESSION['user']['id']) == ($blogpost['userID']) || $_SESSION['user']["username"] == "admin") {  ?>
	<div class="edit_buttons">
		<a class="button button_edit button_small button_turquoise" href="edit_post.php?postID=<?= $blogpost['postID'] ?>">Edit Post</a>
		<a class="button button_delete button_small button_grey" href="logic/delete_post.php?postID=<?= $blogpost['postID'] ?>">Delete Post</a>
	</div>
<?php }
} ?>
              



