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
<img src="../images/logo-acueducto.png"  width="150" style="float:left">
<center>
<h4><center><b>Sistema de Facturación Acueducto</b></center></h4>
<h3><p>Barrio Minuto de Dios</p></h3>
<p>Nit: 21450-001-5</p>
<p>Celular: (+57) 312 507 6914</p>
<h2><p><strong>Factura Electrónica</strong></p></h2>
</center>

<div id="context">
<table class="table table-striped table-bordered">
<tr><td>Apellidos</td><td><b><?php echo $lname; ?></b></td><td>ID Cliente</td><td>SMART/00<?php echo $id; ?></td> </tr>
<tr><td>Nombre</td><td><b><?php echo $fname; ?></td><td bordercolor="#000000">N° Serial Medidor</td><td><?php echo $mi; ?></td></tr>

<tr><td>Dirección </td><td><b><?php echo $address; ?></td><td></td><td></td></tr>
<tr><td bordercolor="#000000">Teléfono </td><td><b><?php echo $contact; ?></td> <td></td><td></td></tr>
<tr><td bordercolor="#000000">Lectura anterior</td><td><b> <?php echo $prev;?> </td><td bordercolor="#000000">Lectura actual</td><td><b><?php echo $pres; ?> </td></tr>
<tr><td bordercolor="#000000">Consumo </td><td><b><?php echo $totalcons;?> </td><td bordercolor="#000000">Precio / unidad </td>
<td><b><?php echo $price; ?>&nbsp;Um<sup>3</sup> </td>
</tr>
<tr><td colspan="4"><center><h4><strong>Total a Pagar: </strong><b> &#36; <?php echo number_format($bill,2, ',', '.'); ?><b> /= Um<sup>3</sup></h4></center></td></tr>
<?php
//$session=$_SESSION['id'];
include 'includes/conn.php';
$result = mysqli_query($conn,"SELECT * FROM tblclientuser where id= '".$_SESSION['userid']."'");
while($row = mysqli_fetch_array($result))
  {
  $sessionname=$row['name'];

  }
?>
<tr><td colspan="3">Tesorero: <?php echo $sessionname;?></td><td>Firma:_____________</td></tr>

 
</table>


</div>
</div>
<br/>
<CENTER>
<button type="button"  class="btn btn-default " onclick="printDiv(data)"><span
class=" fa fa-print"></span>&nbsp;Imprimir Factura</button>&nbsp;
<a href="viewBill.php?q=<?php echo $cnumber;?>">
<button class="btn btn-info"><span class="fa fa-arrow-left"></span>&nbsp;Regresar</button></a></CENTER>
</body>
</html>