	<?php include "includes/header.php";?>
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
           Billing Records
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
                  <h3 class="box-title"><i class="fa fa-list"></i> List of Records</h3>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive">
                  <table id="example1" class="table table-hover">
                    <thead>
                      <tr>
                        <th>Client Number</th>
                        <th>Name</th>
                      
                        <th>Meter Number</th>
                        <th>Tools</th>
                      </tr>
                    </thead>
                    <tbody>
				        <?php
						$sql = "SELECT * FROM tblclientuser INNER JOIN tblclient ON tblclientuser.clientID=tblclient.id INNER JOIN tblbill ON tblclient.cnumber=tblbill.cnumber WHERE clientID='".$_SESSION['userid']."'";
						$query = $conn->query($sql);
						while($row = $query->fetch_assoc()){
						?>
                        <tr>
							<td><?php echo $row['cnumber']; ?></td>
						    <td><?php echo $row['lname'].', '.$row['mi'].' '.$row['fname']; ?>	</td>
							
							<td><?php echo $row['meternum']; ?></td>
							<td>
							<a href="billPayment.php?q=<?php echo $row['cnumber']; ?>" class="btn btn-primary btn-sm"><span class="fa fa-money"></span></a>
						    <a href="viewBill.php?q=<?php echo $row['cnumber']; ?>" class="btn btn-info btn-sm"><i class="fa fa-eye"></i></a>
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
