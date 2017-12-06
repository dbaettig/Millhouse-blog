<?php
    require '../partials/database.php';

    /*Form to register*/
    if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
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
	  ":profilepic" => 'profilepics/profilepig.jpg'
    )); 

    header("Location: ../login.php");

    }
    else {
      header("Location: ../register.php?success=false&email=notvalid");
    }