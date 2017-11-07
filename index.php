<?php
session_start();

require 'database.php';


if(isset($_SESSION["user"])){
echo "Du är nu inloggad" . "</br>" .
$_SESSION["user"]["username"];
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<style>
        body{
            text-align: right;
            font-family: monospace;
            font-size:1.5em;
            background-color: #D4EA17;
            color:deeppink;
        }
    
    
    </style>
</head>

<body>
	<a href="logout.php">logout</a> 
</body>
</html>