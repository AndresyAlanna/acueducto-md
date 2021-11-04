<?php
	include 'includes/session.php';
	if(isset($_POST['btnupdate'])){			
		$id=$_POST['userid'];
		$fname= $_POST['fname'];
		$mi= $_POST['mi'] ;
		$lname= $_POST['lname'] ;
		$address = $_POST['address'] ;
		$contact = $_POST['contact'] ;
		$password = $_POST['password'] ;


		$sql= "UPDATE tblclient SET fname='$fname',
		mi='$mi',
		lname='$lname',
		address='$address',
		contact='$contact'
		WHERE id='$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Successfully updated!';
			$sql= "UPDATE tblclientuser SET password='$password' WHERE clientID='$id'";
			$query = $conn->query($sql);
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}	
	else{
		$_SESSION['error'] = 'Fill up add form first';
		
	}
	header('location: viewBill.php');
?>