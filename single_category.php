<?php
require 'session.php';
require 'head.php';
require 'navbar.php';
require 'database.php';


if (isset ($_POST["news"])){
    
$statement = $pdo->prepare("SELECT * FROM posts INNER JOIN users ON posts.userID = users.id
WHERE category = 'news'");
$statement->execute();
$blog = $statement ->fetchALL(PDO::FETCH_ASSOC);
}

elseif (isset ($_POST["style"])){
    
$statement = $pdo->prepare("SELECT * FROM posts INNER JOIN users ON posts.userID = users.id
WHERE category = 'style'");
$statement->execute();
$blog = $statement ->fetchALL(PDO::FETCH_ASSOC);
}

elseif (isset ($_POST["interior"])){
    
$statement = $pdo->prepare("SELECT * FROM posts INNER JOIN users ON posts.userID = users.id
WHERE category = 'interior'");
$statement->execute();
$blog = $statement ->fetchALL(PDO::FETCH_ASSOC);
}

elseif (isset ($_POST["featured"])){
    
$statement = $pdo->prepare("SELECT * FROM posts INNER JOIN users ON posts.userID = users.id
WHERE category = 'featured'");
$statement->execute();
$blog = $statement ->fetchALL(PDO::FETCH_ASSOC);
}
?>

	<body id="index">
		<main>
			<div class="wrapper">
				<div class="categorymenu">

					<form action="single_category.php" method="POST">
						<input class="input_category <?php if($_POST['news']) echo 'active'; ?>" type="submit" name="news" value="News">
						<input class="input_category <?php if($_POST['style']) echo 'active'; ?>" type="submit" name="style" value="Style">
						<input class="input_category <?php if($_POST['interior']) echo 'active'; ?>" type="submit" name="interior" value="Interior">
						<input class="input_category <?php if($_POST['featured']) echo 'active'; ?>" type="submit" name="featured" value="Featured">
					</form>
				</div>

				<div class="categorywrapper">
					<?php 
					
					foreach($blog as $blogpost) { ?>
					
    <div class="wrapper">
        <div class="categorymenu">
           
            <!--Categories-->
            <form action="single_category.php" method="POST">
                <input class="input_category" type="submit" name="news" value="News">
                <input class="input_category" type="submit" name="style" value="Style">
                <input class="input_category" type="submit" name="interior" value="Interior">
                <input class="input_category" type="submit" name="featured" value="Featured">
            </form>
        </div>

        <div class="categorywrapper">


					<div class="categoryblogpost">

            <?php foreach($blog as $blogpost) {
    ?>

            <div class="categoryblogpost">


						<div class="categoryblogpost__image">
							<img src="<?= $blogpost['image'] ?>">
						</div>

						<div class="blogpost__text">
							<div class="blogpost__text--meta">
								<a href="single_post.php?postID=<?= $blogpost['postID'] ?>">
									<h2>
										<?=$blogpost['title']?>
									</h2>
								</a>
								<small>
							By <?=  $blogpost['username'] ?> in
								<?= $blogpost['category'] ?> 
								<?= $blogpost['created'] ?>
						</small>

							</div>
							<div class="blogpost__text--bodytext">
								<p>
									<?= $blogpost['post'] ?>
								</p>
							</div>
						</div>
					</div>

					<?php } ;?>

				</div>
			</div>
                    </div>
                    <div class="blogpost__text--bodytext">
                        <p>
                            <?= $blogpost['post'] ?>
                        </p>
                    </div>
                </div>
            </div>

            <?php } ?>

        </div><!--categorywrapper close-->
    </div> <!--wrapper close-->
    <?php
require "footer.php";
?>