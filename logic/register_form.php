<?php
    require '../partials/database.php';

    /*Form to register*/

    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $username = $_POST["username"];
    $email = $_POST["email"];

    $statement = $pdo->prepare("
      INSERT INTO users (username, password, email, profilepic)
      VALUES (:username, :password, :email, :profilepic)");

    $statement->execute(array(
      ":username" => $username,
      ":password" => $password,
      ":email" => $email,
		":profilepic" => 'img/glasses1.jpeg'
    )); 

    header("Location: ../login.php");