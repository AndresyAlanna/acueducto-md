<?php
	$conn = new mysqli('localhost', 'root', '', 'waterbilling');

	if ($conn->connect_error) {
	    die("Connection failed: " . $conn->connect_error);
	}
	
?>