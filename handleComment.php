<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
 function getID($conn, $sessionID){
 	$sql = "SELECT userID FROM xssDemo.sessionLogs WHERE id = '" . $sessionID."'"; //Session is the primary key for the sessionLog table
 	$result = $conn->query($sql); // execute the above statement
 	if ($result->num_rows == 1){
 		return $result->fetch_row()[0]; //return the id if there is only one result
 	}
 	return 1;
 }

 function getUName($conn, $sessionID){
	$uid = getID($conn,$sessionID);
	$sql = "SELECT name FROM xssDemo.users WHERE id = '" . $uid . "'"; //ID is the primary key for the users table
	$result = $conn->query($sql); // execute the above statement
 	if ($result->num_rows == 1){
 		return $result->fetch_row()[0]; //return the id if there is only one result
 	}
 	return "\"user has no name\"";
 }

$servername = "localhost";
$username = "prettyBoy";
$password = "\$uperL337";
// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo $_POST["sessionID"];
//inserts id username and comment into guestbook table
$sql = "INSERT INTO xssDemo.guestbook (username, comment)
VALUES (\"" . getUName($conn, $_POST["sessionID"]) . "\",\" " . $_POST["comment"] . "\" )";
//Realistically, the stripping should probably occur here^, so that the payload is never in the database to begin with.

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 
