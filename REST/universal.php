<?php
	function writeError($text) {
		echo $text."<br />";
	}
	
	function is_positive_integer($str) {
		return (is_numeric($str) && $str > 0 && $str == round($str));
	}
	
	function make_connection() {
		$servername = "104.154.234.91";
		$username = "root";
		$password = "wornhub1";
		$db = "wornhub";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $db);

		// Check connection
		if ($conn->connect_error) {
			writeError("Connection failed: " . $conn->connect_error);
			return null;
		} 
		
		return $conn;
	}
	
	function query($conn, $query){
		$r = $conn->query($query);
		if($r->num_rows > 0){
			return $r->fetch_assoc();
		}else{
			return false;
		}
	}
?>