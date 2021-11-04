<?php
	
	include 'includes/session.php';

	if(isset($_GET['active'])){
		$sql = "UPDATE tblclient SET status='1' WHERE id=".$_GET['active'];
		if($conn->query($sql)){
			$_SESSION['success'] = 'Activación exitosa!';
			
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Opps!! algo salió mal!!';
	}
header('location: clients.php');
?>