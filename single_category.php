<?php
session_start();
require "header.php";
require "database.php";


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
    foreach($blog as $blogpost) {
    ?>
    <div class="wrapper">
        <div class="posts">
            <div class="blogpost">

                <div class="blogpost__image">
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
        </div>
        <!-- close .posts -->
    </div>
    <!--wrapper-->
    <?php } ?>
    <?php
require "footer.php";
?>
