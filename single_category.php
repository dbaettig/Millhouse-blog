<?php
require 'session.php';
require 'head.php';
require 'database.php';


if (isset ($_GET["news"])){
    
$statement = $pdo->prepare("SELECT * FROM posts INNER JOIN users ON posts.userID = users.id
WHERE category = 'news'");
$statement->execute();
$blog = $statement ->fetchALL(PDO::FETCH_ASSOC);
}

elseif (isset ($_GET["style"])){
    
$statement = $pdo->prepare("SELECT * FROM posts INNER JOIN users ON posts.userID = users.id
WHERE category = 'style'");
$statement->execute();
$blog = $statement ->fetchALL(PDO::FETCH_ASSOC);
}

elseif (isset ($_GET["interior"])){
    
$statement = $pdo->prepare("SELECT * FROM posts INNER JOIN users ON posts.userID = users.id
WHERE category = 'interior'");
$statement->execute();
$blog = $statement ->fetchALL(PDO::FETCH_ASSOC);
}

elseif (isset ($_GET["featured"])){
    
$statement = $pdo->prepare("SELECT * FROM posts INNER JOIN users ON posts.userID = users.id
WHERE category = 'featured'");
$statement->execute();
$blog = $statement ->fetchALL(PDO::FETCH_ASSOC);
}

?>

	<body id="index">
	<?php require 'navbar.php';?>
		<main>
			<div class="wrapper">
				<div class="categorymenu">
                    <ul>
                        <li <?php if (isset ($_GET["news"])){echo "class='active'";}?></l><a href="single_category.php?news">News</a></li>
                        
                        <li <?php if (isset ($_GET["interior"])){echo "class='active'";}?>><a href="single_category.php?interior">Interior</a>
                        
                        <li <?php if (isset ($_GET["style"])){echo "class='active'";}?>><a href="single_category.php?style">Style</a></li>
                        
                        <li <?php if (isset ($_GET["featured"])){echo "class='active'";}?>><a href="single_category.php?featured">Featured</a></li>
				    </ul>
                </div>

				<div class="categorywrapper">
					
            <?php foreach($blog as $blogpost){
    ?>

            <div class="categoryblogpost">


						<div class="categoryblogpost__image">
							<img src="<?= $blogpost['image'] ?>">
						</div>

						<div class="categoryblogpost__text">
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

        </div><!--categorywrapper close-->
    </div> <!--wrapper close-->
    <?php
require "footer.php";
?>