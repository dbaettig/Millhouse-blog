
</main>
<a class="top" href="#top">Back to top <i class="fa fa-arrow-up" aria-hidden="true"></i></a>
        
<footer role="contentinfo">
	<div class="footer-inner">
		<ul>
			<li class="footer-inner__info about">
			   <H4>About</H4>
				<p>This is a blog my Millhouse.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam.</p>
			</li>

			<li class="footer-inner__info contact">
			   <H4>Contact</H4>
				<p>info@millhouse.com <br> 123-4567890 Wayway 2,<br><br> 12345 Place<br> COUNTRY</p>

					<a href="www.twitter.com" target="_blank"><i class="fa fa-twitter" aria-hidden="true" ></i><span class="sr-only">Twitter</span></a>
					
					<a href="https://www.facebook.com/groups/509879569361835/" target="_blank">
					<i class="fa fa-facebook" aria-hidden="true"></i><span class="sr-only">Facebook</span></a>
					
					<a href="www.instagram.com" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i><span class="sr-only">Instagram</span></a>

			</li>

			<li class="footer-inner__info archive">
				<H4>Archive</H4>
<!--				<a href="archive.php">November 2017</a>-->
				<?php require 'logic/archive_monthlist_db.php'; ?>
				<?php require 'partials/archive_monthlist.php'; ?>
			</li>
	   </ul>
	</div>
</footer>

	<script>
		ClassicEditor
			.create( document.querySelector( '#editor' ) )
			.catch( error => {
				console.error( error );
			} );
	</script>
	<script src="js/myscript.js"></script>

</body>
</html>