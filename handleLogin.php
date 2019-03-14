<?php
	$servername = "localhost";
	$username = "prettyBoy";
	$password = "\$uperL337";

	// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//inserts username into users 
$sql = "INSERT INTO xssDemo.users (name)
VALUES (\"" . $_POST["username"] ."\" )";

if ($conn->query($sql) === TRUE) {
    echo "New user record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
//create a new session
$sql = "INSERT INTO xssDemo.sessionLogs (userID)
VALUES (" . $conn->insert_id . " )"; //insert id returns the auto generated id from the previous query (which is now the user id)

if ($conn->query($sql) === TRUE) {
    echo "New session record created successfully";
    
	//assign the sessionID to a cookie
    setcookie("sessionID", $conn->insert_id); //this returns the auto generated id from previous query (which is not the session id)
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>
<script>
window.location("index.php");
</script>
