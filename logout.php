<?php
session_start();

session_destroy();
unset($_SESSION["loggedIn"]);
unset($_SESSION["user"]);

header("Location: login.php");
exit;