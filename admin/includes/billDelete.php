
<?php
	
	include 'session.php';

	if(isset($_GET['billDel'])){

		///$sql = "DELETE FROM owners WHERE id = '.$_GET['delete_id'].'";
        $sql="DELETE FROM tblbill WHERE id=".$_GET['billDel'];
		if($conn->query($sql)){
			$_SESSION['success'] = 'Factura eliminada correctamente!';
			
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Opps!! algo salió mal!!';
	}
header('location: ../bill.php');
?>