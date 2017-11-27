<?php 
if (isset($_SESSION['user'])) {
    if (($_SESSION['user']['id']) == ($blogpost['userID'])) {  ?>
	<div class="edit_buttons">
		<button class="button_edit button_small button_turquoise">
			<a href="edit_post.php?postID=<?= $blogpost['postID'] ?>">Edit Post</a>
		</button>
		<button class="button_delete button_small button_grey">
			<a href="delete_post.php?postID=<?= $blogpost['postID'] ?>">Delete Post</a>
		</button>
	</div>
<?php }
} ?>



