<?php
session_start();
require "header.php";
require "database.php";
?>

<?php 

echo "ANTAL INLÄGG SOM GJORTS</br>";

       $statement = $pdo->prepare("SELECT COUNT(*) FROM posts where userID = :userID");
       $statement->execute(array(
       ":userID" => $_SESSION["user"]["id"]
   ));

       $count = $statement->fetch(PDO::FETCH_ASSOC);
       foreach($count as $c) {
           echo $c;
           echo "</br>";
       }

echo "</br></br>";

       $statement = $pdo->prepare("SELECT title, post, created FROM posts WHERE userID = :userID ORDER BY postID DESC LIMIT 5");
       $statement->execute(array(
       ":userID" => $_SESSION["user"]["id"]
   ));

       $statement = $pdo->prepare("SELECT * FROM posts
INNER JOIN users ON posts.userID = users.id");
$statement->execute();
 

             echo "FEM SENASTE INLÄGG</br>";
       $count = $statement->fetchAll(PDO::FETCH_ASSOC);
       foreach($count as $c) {
       	echo "</br>";
       	   echo $c['title'];
       	   echo "</br>";
           echo $c['post'];
           echo "</br>";
           echo $c['created'];
           echo "</br>";
           echo $c['username'];  
           echo "</br>";   
       }

       echo "</br>";

       /*Här printas antal kommentarer ut*/
echo "ANTAL KOMMENTARER SOM GJORTS</br>";
       $statement = $pdo->prepare("SELECT COUNT(*) FROM comments where userID = :userID");
       $statement->execute(array(
       ":userID" => $_SESSION["user"]["id"]
   ));
       $count = $statement->fetch(PDO::FETCH_ASSOC);
       foreach($count as $c) {
           echo $c;
           echo "<br>";
       }

       /*Här hämtas de fem senaste kommentarerna*/
       $statement = $pdo->prepare("SELECT name, email, comment, created FROM comments where userID = :userID order by userID DESC LIMIT 5");
       $statement->execute(array(
       ":userID" => $_SESSION["user"]["id"]
   )); 


    echo "FEM SENASTE KOMMENTARER SOM GJORTS</br>";
         $count = $statement->fetchAll(PDO::FETCH_ASSOC);
       foreach($count as $c) {
           echo $c['comment'];
           echo "</br>";
           echo $c['created'];
           echo "</br>";
           echo $c['name'];
           echo "</br>";
           echo $c['email'];
           echo "</br>";
       }
?>


<?php

require 'footer.php';

?>