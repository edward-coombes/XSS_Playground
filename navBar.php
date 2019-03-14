<?php
$persistentStub = "persistent";
$reflectedStub = "reflected";
$insecure = "Insecure.php";
$secure = "Secure.php";
$sec = 0;
if($sec == 0){
 $persistFinal = $persistentStub . $insecure;
 $reflectedFinal = $reflectedStub . $insecure; 
} else {
 $persistFinal = $persistentStub . $secure;
 $reflectedFinal = $reflectedStub . $secure;
}
?>

<div id="navBar">
<img src="logo.png" id="logo">
<div id="theTitle"><a href="index.php">Paimon's Place</a></div>
<ul>
	<li> <a href="<?php echo $persistFinal; ?>">Guest Book </a></li>
	<li> <a href="<?php echo $reflectedFinal; ?>">Search</a></li>
</ul>
</div>
