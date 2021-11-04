<?php
	$conn = new mysqli('localhost', 'root', '', 'waterbilling');

	if ($conn->connect_error) {
	    die("La conexión falló: " . $conn->connect_error);
	}
	
?>