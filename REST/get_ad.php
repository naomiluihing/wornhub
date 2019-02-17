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
	
<<<<<<< HEAD
	$colours = ["Black", "White", "Red", "Orange", "Yellow", "Green", "Blue", "Purple", "Gray", "Brown", "Other", "Mixed"];
	$statuses = ["For Sale", "On Hold", "Sold"];
	
	echo "{'".$q1["aid"]."':{'oid':'".$q1["oid"]."',
	'title':'".$q1["title"]."',
	'colour':'".$colours[$q1["colour"]]."',
	'condition':'".$q1["clothingCondition"]."',
	'status':'".$statuses[$q1["status"]]."',
	'date':'".$q1["posted"]."',,
	'type':'".$q1["type"]."',
	'size':'".$q1["size"]."'
	'price':'".$q1["price"]."'}}";
?>
=======
    echo 
?>
>>>>>>> de1a74039a386ebba0b83709ccaa015541c5b232
