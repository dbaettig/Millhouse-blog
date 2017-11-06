<?php
    require 'database.php';

    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    $username = $_POST["username"];

    $statement = $pdo->prepare("
      INSERT INTO users (username, password)
      VALUES (:username, :password)");

    $statement->execute(array(
      ":username" => $username,
      ":password" => $password
    )); 

    header("Location: register.php");