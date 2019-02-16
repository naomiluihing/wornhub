<?php
	function writeError($text) {
		
	}
	
	function make_connection() {
		$servername = "104.154.234.91";
		$username = "root";
		$password = "wornhub1";

		// Create connection
		$conn = new mysqli($servername, $username, $password);

		// Check connection
		if ($conn->connect_error) {
			writeError("Connection failed: " . $conn->connect_error);
			return null;
		} 
		
		return $conn;
	}
?>