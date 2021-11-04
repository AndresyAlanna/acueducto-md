
<?php
	
	include 'session.php';

	if(isset($_GET['memDelete'])){

		///$sql = "DELETE FROM owners WHERE id = '.$_GET['delete_id'].'";
        $sql="DELETE FROM tblclientuser WHERE clientID=".$_GET['memDelete'];
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
header('location: ../member.php');
?>