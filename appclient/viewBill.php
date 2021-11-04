<?php include "includes/header.php";

$sql = "SELECT * FROM tblclient WHERE id='".$clientID."'";
$query = $conn->query($sql);
$urow = $query->fetch_assoc();


$id=$urow['cnumber'] ;
$lname= $urow['lname'] ;					
$fname=$urow['fname'] ;
$mi=$urow['mi'] ;
$address=$urow['address'] ;
$contact=$urow['contact'] ;
$meternum=$urow['meternum'] ;
$created=$urow['created_on'] ;

$q = mysqli_query($conn,"SELECT Prev FROM tempo_bill WHERE cnumber = '$id'");
$results = mysqli_fetch_array($q);
$previous = $results['Prev'];

$frequency = 'monthly';
$last_date_we_have = $created;

$valid_reminder_date = get_next_reminder_date($last_date_we_have, $frequency);

function get_next_reminder_date($start_date, $frequency)
{
    $date = new DateTime($start_date);
    switch ($frequency) {
        case 'weekly' :
            $interval = 'P1W';
            break;
        case 'monthly' :
            $interval = 'P1M';
            break;
        case 'quarterly' :
            $interval = 'P3M';
            break;
        case 'annually' :
            $interval = 'P1Y';
            break;
    }

    $date->add(new DateInterval($interval));

    if ( time() > $date->getTimestamp() ) {
        //echo $date->format('Y-m-d');
       /// echo ' Not there yet' . PHP_EOL;
        return get_next_reminder_date($date->format('Y-m-d'), $frequency);
    } else {
        return $date->format('Y-m-d');
    }
}
?>
  <body class="skin-blue sidebar-mini">
    <div class="wrapper">
	 <?php include "includes/topnavbar.php";?>
      <!-- Left side column. contains the logo and sidebar -->
	<?php include "includes/sidebar.php";?>
      <!-- Content Wrapper. Contains page content -->

      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
           Client Billing Records
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Bill</a></li>
            <li class="active">Data tables</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
           <div class="row">
            <div class="col-xs-12">
               <div class="box box-info">
                <div class="box-header">
                   <h3 class="box-title">Client Name: <?php echo $fname.' '.$mi.' '.$lname;?> | Client ID: <?php print $id;?> | <span class="text-danger"><?php echo 'Next payment Date = ' .date('M d, Y', strtotime($valid_reminder_date))?></span></h3>
				  <!--<a href="bill.php" class="btn btn-success btn-sm pull-right"><i class="fa fa-share"></i></a>-->
                </div><!-- /.box-header -->
                <div class="box-body table-responsive">
                  <table id="example1" class="table table-hover">
                    <thead>
                      <tr>
						<th>Previous Reading</th>
						<th>Present Reading</th>
						<th>Consuption</th>
						<th>Price</th>
						<th>Date</th>
						<th>Bill Amount</th>
                        <th>Tools</th>
                      </tr>
                    </thead>
                    <tbody>
				        <?php
						$sql = "SELECT * FROM tblbill WHERE cnumber='$id'";
						$query = $conn->query($sql);
						while($row = $query->fetch_assoc()){
							 $prev=$row['prev'];
							  $pres=$row['pres'];
							  $price=$row['price'];
							  $totalcons=$pres - $prev;
							  $bill=$totalcons * $price;
						?>
                        <tr>
							<td><?php echo $prev; ?></td>
						    <td><?php echo $pres; ?></td>
							<td><?php echo $totalcons; ?></td>
							<td><?php echo $price; ?></td>
							<td><?php echo $row['date']; ?></td>
							<td>&#8369; <?php echo number_format($bill,2); ?></td>
							<td>
							
						    <a href="viewpayment.php?q=<?php echo $row['cnumber']; ?>" class="btn btn-info btn-sm"><span class="fa fa-eye"></span></a>
						  </td>
						  </tr>
						  <?php
						}
					  ?>
					</tbody>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
			  
			  
			  <?php
				if(isset($_SESSION['error'])){
				  echo "
					<div class='alert alert-danger alert-dismissible'>
					  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					  <h4><i class='icon fa fa-warning'></i> Error!</h4>
					  ".$_SESSION['error']."
					</div>
				  ";
				  unset($_SESSION['error']);
				}
				if(isset($_SESSION['success'])){
				  echo "
					<div class='alert alert-success alert-dismissible'>
					  <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
					  <h4><i class='icon fa fa-check'></i> Success!</h4>
					  ".$_SESSION['success']."
					</div>
				  ";
				  unset($_SESSION['success']);
				}
			  ?>
			  
            </div>
          </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
     <?php require_once "includes/footer.php";?>
     
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->
	<?php require_once "datatablescripts.php";?>
	
  </body>
</html>
