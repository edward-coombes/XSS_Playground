<!DOCTYPE html>
<html>
<head>
<?php include "head.php" ?>
</head>
<body>
<?php include "navBar.php" ?>
<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

	if (isset($_COOKIE["sessionID"])){
		include "loggedIn.php";
	} else {
		include "login.php";
	}
?>

</body>
</html>
