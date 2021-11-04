<?php
	
	include 'includes/session.php';

	if(isset($_GET['deactive'])){
		$sql = "UPDATE tblclient SET status='0' WHERE id=".$_GET['deactive'];
		if($conn->query($sql)){
			$_SESSION['success'] = 'Desactivación exitosa!';
			
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