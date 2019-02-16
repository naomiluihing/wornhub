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
	
    echo "{'".$q1["aid"]."':{'userid':'".$q1["oid"]."','title':".$q1["title"].",'price':".$q1["price"].",'type':".$q1["type"].",'size':".$q1["size"].",'brand':".$q1["brand"].",'colour':".$q1["colour"].", 'condition':".$q1["condition"].",'status':".$q1["status"].",'description':".$q1["description"]."}}";
?>
