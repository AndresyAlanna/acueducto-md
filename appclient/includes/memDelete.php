
<?php
	
	include 'session.php';

	if(isset($_GET['memDelete'])){

		///$sql = "DELETE FROM owners WHERE id = '.$_GET['delete_id'].'";
        $sql="DELETE FROM tblclientuser WHERE clientID=".$_GET['memDelete'];
		if($conn->query($sql)){
			$_SESSION['success'] = 'Client Successfully deleted!';
			
		}
		else{
			$_SESSION['error'] = $conn->error;
		}
	}
	else{
		$_SESSION['error'] = 'Opps!! somthing went wrong!!';
	}
header('location: ../member.php');
?>