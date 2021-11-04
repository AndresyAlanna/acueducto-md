<?php
	include 'includes/session.php';
	if(isset($_POST['btnupdate'])){			
		$id=$_POST['userid'];
		$name= $_POST['name'];
		$password= $_POST['password'] ;
		//$lname= $_POST['lname'] ;
		//$address = $_POST['address'] ;
		//$contact = $_POST['contact'] ;
		//$meternum = $_POST['meternum'] ;


		$sql= "UPDATE tblclientuser SET name='$name', password='$password' WHERE id='$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Actualizado exitosamente!';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}	
	else{
		$_SESSION['error'] = 'Primero llene el formulario completamente';
		
	}
	header('location: dashboard.php');
?>