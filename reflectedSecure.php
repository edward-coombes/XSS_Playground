<html>
<head>
<?php include "head.php" ?>
</head>
<body>
<?php include "navBar.php" ?>
	<?php header("X-XSS-Protection: 0"); ?>
<form action="reflectedSecure.php" method="get">
<input type="text" name="search">
<input type="submit" value="Submit">
</form>
	<?php
		 if($_GET["search"]){ //santized paste
			echo filter_var("sorry, no results for " . $_GET["search"] , FILTER_SANITIZE_STRING);
		} 
	?>

</body>
</html>
