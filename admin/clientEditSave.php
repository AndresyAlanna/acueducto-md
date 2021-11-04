<?php
	include 'includes/session.php';
	if(isset($_POST['update'])){			
		$id=$_POST['id'];
		$fname= $_POST['fname'];
		$mi= $_POST['mi'] ;
		$lname= $_POST['lname'] ;
		$address = $_POST['address'] ;
		$contact = $_POST['contact'] ;
		$meternum = $_POST['meternum'] ;


		$sql= "UPDATE tblclient SET fname='$fname',
		mi='$mi',
		lname='$lname',
		address='$address',
		contact='$contact',
		meternum='$meternum'
		WHERE id='$id'";
		if($conn->query($sql)){
			$_SESSION['success'] = 'Los datos se actualizaron correctamente!';
		}
		else{
			$_SESSION['error'] = $conn->error;
		}

	}	
	else{
		$_SESSION['error'] = 'Primero llene el formulario completamente';
		
	}
	header('location: clientEdit.php?q='.$_POST['id']);
?>