<html>
<head>
<?php include "head.php" ?>
</head>
<body>
<?php include "navBar.php" ?>
<?php header("X-XSS-Protection: 0"); ?>
<form action="reflectedInsecure.php" method="get">
<input type="text" name="search">
<input type="submit" value="Submit">
</form>
	<?php 
		if($_GET["search"]){ //unsanitized paste
			echo "sorry, no results for " . $_GET["search"];
		} 

	?> 
</p>
</body>
</html>
