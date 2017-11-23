<?php
require 'session.php';
require 'database.php';
require 'head.php';

$statement = $pdo->prepare("SELECT * FROM posts
INNER JOIN users ON posts.userID = users.id
ORDER BY postID DESC");
$statement->execute();
$blog = $statement ->fetchALL(PDO::FETCH_ASSOC);
?>

    <body id="index">
        <?php require 'navbar.php'; ?>
        <main>
            <div class="wrapper">

                <nav class="categorymenu">

                    <ul>
                        <li><a href="single_category.php?news">News</a></li>

                        <li><a href="single_category.php?interior">Interior</a>

                            <li><a href="single_category.php?style">Style</a></li>

                            <li><a href="single_category.php?featured">Featured</a></li>
                    </ul>
                </nav>

                <div class="posts">


                    <?php

		foreach($blog as $blogpost) {
	?>
                        <article class="blogpost">
                            <figure class="blogpost__image">

                                <img class="index_image" src="<?= $blogpost['image'] ?>">
                            </figure>

                            <div class="blogpost__text">
                                <div class="blogpost__text--meta">
                                    <a href="single_post.php?postID=<?= $blogpost['postID'] ?>">
                                        <h2 class="left">
                                            <?=$blogpost['title']?>
                                        </h2>
                                    </a>

                                    <small class="left">
						By <?=  $blogpost['username'] ?> in
							<?= $blogpost['category'] ?> 
							<?= $blogpost['created'] ?>
					</small>

                                    <?php include 'edit_buttons.php'?>
                                </div>
                              <div class="blogpost__text--bodytext">
									<p>
										<?= substr($blogpost['post'],0,200) . "..."; ?>
                  </p>
                  <p class="comment_link"><a href="single_post.php?postID=<?= $blogpost['postID'] ?>">Comment</a></p>
                  
                  <p class="comment_link"><a href="single_post.php?postID=<?= $blogpost['postID'] ?>">Läs mer</a></p>
                </div>
                            </div>

                        </article>
                        <?php } ?>

                </div>
                <!-- close .posts -->
            </div>
            <!--wrapper-->

            <?php
	require 'footer.php';
?>
