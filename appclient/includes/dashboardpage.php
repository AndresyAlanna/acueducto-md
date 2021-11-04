 <?php
	$sql = "SELECT * FROM tblclient";
	$query = $conn->query($sql);
  ?>
  <?php
	$sql = "SELECT * FROM tblbill";
	$stmt = $conn->query($sql);
	
	$total = 0;
	foreach($stmt as $srow){
	  $subtotal = $srow['price'];
	  $total += $subtotal;
	}
  ?>
  
   <?php
	$sql = "SELECT * FROM tblclientuser";
	$member = $conn->query($sql);
  ?>
  
  <?php
	$sql = "SELECT * FROM tblclientuser WHERE created_on=DATE(NOW())";
	$newmem = $conn->query($sql);
  ?>