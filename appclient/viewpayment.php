<?php include "includes/header.php";?>
<?php
$id =$_REQUEST['q'];
$result = mysqli_query($conn,"SELECT * FROM tblbill WHERE cnumber='$id'");
while($row = mysqli_fetch_array($result))
  {
	  $prev=$row['prev'];
	  $cnumber=$row['cnumber'];
	  $pres=$row['pres'];
	  $price=$row['price'];
	  $totalcons=$pres - $prev;
	  $bill=$totalcons * $price;
	  $date=$row['date'];
 
  }
$result = mysqli_query($conn,"SELECT * FROM tblclient WHERE cnumber  = '$cnumber'");
$test = mysqli_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
				$id=$test['id'] ;
				$lname= $test['lname'] ;					
				$fname=$test['fname'] ;
				$mi=$test['meternum'] ;
				$address=$test['address'] ;
				$contact=$test['contact'] ;
?>


<script>
function printDiv(data) {
      var printContents = document.getElementById('data').innerHTML;    
   var originalContents = document.body.innerHTML;      
   document.body.innerHTML = printContents;     
   window.print();     
   document.body.innerHTML = originalContents;
   }
</script>
<body style=" background-size:cover; font-family:'Trebuchet MS', Courier;">

<div id="data">
<img src="../images/Thames_Water_logo.png"  width="100" style="float:left">
<center>
<h4><center><b>Water Billing System</b></center></h4>
<p>Water Company</p>
<p><strong>Bill Invoice</strong></p>
<p>Phone: +7788 (0) 1122 1111</p>

</center>

<div id="context">
<table class="table table-striped table-bordered">
<tr><td>Last Name</td><td><b><?php echo $lname; ?></b></td><td>Client ID</td><td>SMART/00<?php echo $id; ?></td> </tr>
<tr><td>First Name</td><td><b><?php echo $fname; ?></td><td bordercolor="#000000">Meter Number</td><td><?php echo $mi; ?></td></tr>

<tr><td>Address: </td><td><b><?php echo $address; ?></td><td></td><td></td></tr>
<tr><td bordercolor="#000000">Contact </td><td><b><?php echo $contact; ?></td> <td></td><td></td></tr>
<tr><td bordercolor="#000000">Previous Reading</td><td><b> <?php echo $prev;?> </td><td bordercolor="#000000">Present Reading</td><td><b><?php echo $pres; ?> </td></tr>
<tr><td bordercolor="#000000">Consuption </td><td><b><?php echo $totalcons;?> </td><td bordercolor="#000000">Price / unit </td>
<td><b><?php echo $price; ?>&nbsp;Tshs </td>
</tr>
<tr><td colspan="4"><center><h4>Total Invoice<b> &#8369; <?php echo number_format($bill,2); ?><b> /= Tshs</h4></center></td></tr>

<tr><td colspan="3">Casher:__________________________  </td><td>Signature:_____________</td></tr>

 
</table>


</div>
</div>
<br/>
<CENTER>
<button type="button"  class="btn btn-default " onclick="printDiv(data)"><span
class=" fa fa-print"></span>&nbsp;Print Bill</button>&nbsp;
<a href="viewBill.php?q=<?php echo $cnumber;?>">
<button class="btn btn-info"><span class="fa fa-arrow-left"></span>&nbsp;Go back</button></a></CENTER>
</body>
</html>