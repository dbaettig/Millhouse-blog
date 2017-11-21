<?php 
if (isset($_SESSION['user'])) {
	if (($_SESSION['user']['id']) == ($blogpost['userID'])) { ?>
		<button>
			<a href="edit_post.php?postID= <?=$blogpost['postID']?> ">Edit post</a>
		</button>
		<button>
			<a href="delete_post.php?postID= <?=$blogpost['postID']?> ">Delete post</a>
		</button>
	<?php 
	}
} else {
}
?>