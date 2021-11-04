<?php
	include 'includes/session.php';
	include 'includes/timezone.php';
	if(isset($_POST['btnPay'])){			
	
		$cnumber= $_POST['cnumber'] ;
		$prev = $_POST['prev'];
		$pres = $_POST['pres'];
		$totalcun = $pres - $prev;
		$price = $_POST['price'];
		$pricetotal = $totalcun * $price;
		$date = date('Y-m-d H:i:s A');
	
		$sql= "INSERT INTO tblbill(cnumber,prev,pres,price,date)VALUES('$cnumber','$prev','$pres','$pricetotal','$date')";
			if($conn->query($sql)){
				$_SESSION['success'] = 'New Payment Successfully Saved!!';
				$sql= "UPDATE tempo_bill SET Prev = '$pres' WHERE cnumber ='$cnumber'";
				$conn->query($sql);
			}
			else{
				$_SESSION['error'] = $conn->error;
			}
	}	
	else{
		$_SESSION['error'] = 'Fill up add form first';
		
	}
	header('location: bill.php');
?>