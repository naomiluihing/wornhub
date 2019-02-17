<?php
	include "./universal.php";
	
	if(!isset($_GET["id"])){
		writeError("Must specify a user ID.");
		exit;
	}else if(!is_positive_integer($_GET["id"])){
		writeError("User ID not valid.");
		exit;
	}
	
	$conn = make_connection();
	
	$q1 = query($conn, "SELECT * FROM users WHERE users.uid=".$_GET["id"]);
	if($q1===false){
		writeError("User with ID ".$_GET["id"]." not found.");
		exit;
	}
	
		
	echo "{\"".$q1["uid"]."\":{\"name\":\"".$q1["name"]."\",
	\"email\":\"".$q1["email"]."\",
	\"phone number\":\"".$q1["phone"]."\",
	\"postal\":\"".$q1["postal"]."\"}}";
?>
