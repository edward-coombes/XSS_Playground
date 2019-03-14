<html>
<html>
<head>
<?php include "head.php" ?>
</head>
<body>
<?php include "navBar.php" ?>
	<?php header("X-XSS-Protection: 0"); ?>
	 <?php
		$servername = "localhost";
		$username = "prettyBoy";
		$password = "\$uperL337";
		//$dbname = "xssDemo";

		// Create connection
		$conn = new mysqli($servername, $username, $password);
		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		}
	?>

<?php
	//SQL statement to query the table guestbook for the id, username, and comment of each record
	$sql = "SELECT id, username, comment FROM xssDemo.guestbook";

	//make the query
	$result = $conn->query($sql);

	//echo the setup for the table
	echo "<table> <tr> <th>Name</th> <th>Comment</th> </tr>\n"; 

	//if there are records in the guestbook table
	if ($result->num_rows > 0) {
	    // output data of each row
	    while($row = $result->fetch_assoc()) {
	    	echo "\n<tr>\n";
	    	echo "<td> " . $row["username"] . " </td>\n";
	    	echo "<td> " . $row["comment"] . " </td>\n";
	        echo "\n</tr>\n";
	    }
	} else { //let the client know we've got nothing
	    echo "<tr><td>error:</td><td>0 results</td></tr>";
	}
	echo "\n</table>"; //close the table
	$conn->close(); //close the sql connection
?> 
<form id="theForm" > <!--form processing handled with javascript -->

<input type="hidden" name="sessionID" id="sessionID" value="<?php echo $_COOKIE["sessionID"];?>">

<input type="text" name="comment" id="comment">
<input type="submit" value="Submit" id="butt">
</form>
<script src="postComment.js"></script>

</body>
</html>
