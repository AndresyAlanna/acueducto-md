<?php
	include 'includes/session.php';
	if(isset($_POST['btnUpdate'])){			
		$id=$_POST['id'];
		$username= $_POST['username'];
		$password= $_POST['password'] ;

			$sql= "UPDATE tblclientuser SET username='$username', password='$password' WHERE clientID='$id'";
			if($conn->query($sql)){
				$_SESSION['success'] = 'Account have been updated.';
			}
			else{
				$_SESSION['error'] = $conn->error;
			}
	}	
	else{
		$_SESSION['error'] = 'Fill up add form first';
		
	}
	header('location: member.php');
?>