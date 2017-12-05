<?php
require 'partials/session.php';
require "partials/database.php";
require 'partials/head.php';
require 'logic/single_category_db.php'; 

?>

    <body id="index">
        <?php require 'partials/header.php';?>
        <main role="main">
            <div class="wrapper">
                <nav class="categorymenu" role="navigation">
                    <ul>
                        <li <?php if (isset ($_GET["news"])){echo "class='active'";}?>><a href="single_category.php?news">News</a></li>

                        <li <?php if (isset ($_GET[ "interior"])){echo "class='active'";}?>><a href="single_category.php?interior">Interior</a></li>

                        <li <?php if (isset ($_GET[ "style"])){echo "class='active'";}?>><a href="single_category.php?style">Style</a></li>

                        <li <?php if (isset ($_GET[ "featured"])){echo "class='active'";}?>><a href="single_category.php?featured">Featured</a></li>
                    </ul>
                </nav>

                <div class="categorywrapper">
                    <?php 
                    
                    foreach($blog as $blogpost){ ?>
                    
                    <article class="categoryblogpost">

                        <figure class="categoryblogpost__image">
                            <img src="<?= $blogpost['image'] ?>" alt="Blogpost image.">
                        </figure>

                        <div class="categoryblogpost__text">
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
                                <br/>
                                    <?php foreach($comments_toPosts as $comment) { 
                                if($comment['postID'] == $blogpost['postID']) {
                                        echo $comment['number_of_comments'] . " " . "comments";
                                }
                             } ?> 
							</small>

                            </div>
                            <div class="blogpost__text--bodytext">
                                <p>
                                	<?= substr($blogpost['post'],0,200) . "... "; ?>
                                	<a href="single_post.php?postID=<?= $blogpost['postID'] ?>"><span class="readmore">Read more</span></a>
                                </p>
                            </div>
                        </div>
                    </article>
                <?php }
                    if(empty($blogpost)){
                    	echo '<div class="no_post">Sorry, there are  no posts in this category yet!</div>';
                    } 
				?>
                </div><!--categorywrapper close-->
            </div><!--wrapper close-->
            <?php
require "partials/footer.php";
?>
