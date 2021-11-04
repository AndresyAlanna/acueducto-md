
<?php
	
	include 'session.php';

	if(isset($_GET['billDel'])){

		///$sql = "DELETE FROM owners WHERE id = '.$_GET['delete_id'].'";
        $sql="DELETE FROM tblbill WHERE id=".$_GET['billDel'];
		if($conn->query($sql)){
			$_SESSION['success'] = 'Bill Successfully deleted!';
			
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Opps!! somthing went wrong!!';
	}
header('location: ../bill.php');
?>