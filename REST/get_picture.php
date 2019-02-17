<?php
	include "./universal.php";
	
	if(!isset($_GET["id"])){
		writeError("Must specify an ad ID.");
		exit;
	}else if(!is_positive_integer($_GET["id"])){
		writeError("Ad ID not valid.");
		exit;
	}
	
	$conn = make_connection();
	
	$q1 = query($conn, "SELECT * FROM pictures WHERE pictures.aid=".$_GET["id"]);
	if($q1===false){
		writeError("Picture with ad ID ".$_GET["id"]." not found.");
		exit;
	}
	
	echo "{\"".$q1["aid"]."\":{\"location\":\"".$q1["location"]."\"}}";

?>