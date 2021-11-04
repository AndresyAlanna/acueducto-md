<?php
	
	include 'includes/session.php';

	if(isset($_GET['active'])){
		$sql = "UPDATE tblclientuser SET acc_status='1' WHERE clientID=".$_GET['active'];
		if($conn->query($sql)){
			$_SESSION['success'] = 'Successfully enabled!';
			
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Opps!! somthing went wrong!!';
	}
header('location: member.php');
?>