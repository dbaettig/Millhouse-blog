<?php
session_start();

require 'database.php';
require 'header.php';


if(isset($_SESSION["user"])){
echo "Du är nu inloggad" . "</br>" .
$_SESSION["user"]["username"];
}
?>

	<a href="logout.php">logout</a> 

<?php
require 'footer.php';
?>