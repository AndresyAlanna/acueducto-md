<?php
	session_start();
	include 'conn.php';

	if(!isset($_SESSION['userid']) || trim($_SESSION['userid']) == ''){
		header('location: ../index.php');
	}

	$sql = "SELECT * FROM tblclientuser WHERE id = '".$_SESSION['userid']."'";
	$query = $conn->query($sql);
	$user = $query->fetch_assoc();
	$clientID =$user['clientID'];
	
	$sql = "SELECT * FROM tblclient WHERE id='".$clientID."'";
	$query = $conn->query($sql);
	$urow = $query->fetch_assoc();	
?>