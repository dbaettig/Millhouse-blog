<?php 
if (isset($_SESSION['user'])) {
    
} if (($_SESSION['user']['id']) == ($blogpost['userID']))  ?>

    <button class="button_edit">
		<a href="edit_post.php?postID=<?= $blogpost['postID'] ?>">Edit Post</a>
	</button>
    <button class="button_delete">
		<a href="delete_post.php?postID=<?= $blogpost['postID'] ?>">Delete Post</a>
	</button>




