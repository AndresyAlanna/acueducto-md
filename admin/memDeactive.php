<?php
	
	include 'includes/session.php';

	if(isset($_GET['deactive'])){
		$sql = "UPDATE tblclientuser SET acc_status='0' WHERE clientID=".$_GET['deactive'];
		if($conn->query($sql)){
			$_SESSION['success'] = 'Successfully Disconnected!';
			
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