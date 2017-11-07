<form action="post_form.php" method="POST">
	<input type="text" name="title" placeholder="title"> <br/>
	<textarea name="text" placeholder="Write your post..." rows="40" cols="80"></textarea> <br/>
	<select name="category">
		<option value="category">Choose category...</option>
		<option value="news">News</option>
		<option value="style">Style</option>
		<option value="interior">Interior</option>
		<option value="featured">Featured</option>
	</select>
	<input type="submit" name="submit" value="Publish">
	
</form>