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
	
	$q1 = query($conn, "SELECT * FROM ads WHERE ads.aid=".$_GET["id"]);
	if($q1===false){
		writeError("Ad with ID ".$_GET["id"]." not found.");
		exit;
	}
	
	echo "{'".$q1["aid"]."':{'userid':'".$q1["oid"]."','title':'...'}}";
?>