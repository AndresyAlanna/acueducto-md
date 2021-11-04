<?php
	include 'includes/session.php';
	if(isset($_POST['addaccount'])){			
		$id=$_POST['id'];
		$username= $_POST['username'];
		$password= $_POST['password'] ;

		$sql = "SELECT * FROM tblclientuser WHERE username = '$username' OR password='$password' OR clientID='$id'";
		$query = $conn->query($sql);
		if($query->num_rows > 0){
			$_SESSION['error'] = "El nombre de usuario o la contraseña ya existe!!";
		
		}
		else{
			$sql= "INSERT INTO tblclientuser(username,password,clientID,role,created_on)VALUES('$username','$password','$id','Member',NOW())";
			if($conn->query($sql)){
				$_SESSION['success'] = 'Se ha creado la cuenta.';
			}
			else{
				$_SESSION['error'] = $conn->error;
			}
		}

	}	
	else{
		$_SESSION['error'] = 'Primero llene el formulario completamente';
		
	}
	header('location: clientAccount.php?q='.$_POST['id']);
?>