<?php
session_start();

session_destroy();
unset($_SESSION["loggedIn"]);
unset($_SESSION["user"]);

var_dump($_SESSION);

header("Location: login.php");
exit;