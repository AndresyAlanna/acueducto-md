<?php
	include 'includes/session.php';
	if(isset($_POST['btnregister'])){			
	
		$cnumber= $_POST['cnumber'] ;
		$fname= $_POST['fname'] ;
		$mi = $_POST['mi'] ;
		$lname = $_POST['lname'] ;
		$address = $_POST['address'] ;
		$contact = $_POST['contact'] ;
		$meternum =$_POST['meternum'];
		$meterReader =$_POST['meterReader'];
		
		$sql = "SELECT * FROM tblclient WHERE fname = '$fname' OR lname='$lname' OR cnumber='$cnumber'";
		$query = $conn->query($sql);
		if($query->num_rows > 0){
			$_SESSION['error'] = "La información del cliente ya existe!!";
		}
		else{
			$sql= "INSERT INTO tblclient(cnumber,fname,mi,lname,address,contact,meternum,created_on)VALUES('$cnumber','$fname','$mi','$lname','$address','$contact','$meternum',NOW())";
			if($conn->query($sql)){
				$_SESSION['success'] = 'Nuevo cliente creado con éxito!!';
				$sql= "INSERT INTO tempo_bill (Client,Prev,cnumber)VALUES ('$fname','$meterReader','$cnumber')";
				$conn->query($sql);
			}
			else{
				$_SESSION['error'] = $conn->error;
			}
		}
	}	
	else{
		$_SESSION['error'] = 'Primero llene el formulario completamente';
		
	}
	header('location: clients.php');
?>