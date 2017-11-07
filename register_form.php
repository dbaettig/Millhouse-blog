<?php
    require 'database.php';

    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $username = $_POST["username"];
    $email = $_POST["email"];

    $statement = $pdo->prepare("
      INSERT INTO users (username, password, email)
      VALUES (:username, :password, :email)");

    $statement->execute(array(
      ":username" => $username,
      ":password" => $password,
      ":email" => $email
    )); 

    header("Location: register.php");