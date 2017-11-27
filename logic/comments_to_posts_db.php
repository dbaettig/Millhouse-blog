
<?php

$statementcomments = $pdo->prepare("SELECT COUNT(*) FROM comments where postID = :postID");
       $statementcomments->execute(array(
       ":postID" => $_GET["postID"]
   ));
       $comments_toPosts = $statementcomments->fetch(PDO::FETCH_ASSOC);
