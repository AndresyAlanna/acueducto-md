
<?php
	
	include 'session.php';

	if(isset($_GET['delete_id'])){

		///$sql = "DELETE FROM owners WHERE id = '.$_GET['delete_id'].'";
        $sql="DELETE FROM tblclient WHERE id=".$_GET['delete_id'];
		if($conn->query($sql)){
			$_SESSION['success'] = 'Cliente eliminado correctamente!';
			
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Opps!! algo salió mal!!';
	}
header('location: ../clients.php');
?>