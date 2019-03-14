<html>
<head>
	<title>Ice Town</title>
</head>
<body>
<p> This is working. and these is a lot fo data here,
 enough to make the php script send some of it befor eit is done executing i hope</p>
<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

	if isset($_COOKIE["sessionID"]){
		echo "Who are you?";
		include loggedIn.php;
	} else {
		echo "I know who you are.";
		include signin.php;
	}
?>

</body>
</html>
