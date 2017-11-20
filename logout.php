<?php
require 'session.php';

session_destroy();
unset($_SESSION["loggedIn"]);
unset($_SESSION["user"]);

header("Location: index.php");
exit;