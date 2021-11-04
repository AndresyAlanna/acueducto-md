<?php include "includes/header.php";

if(isset($_GET['q'])){
$sql = "SELECT * FROM tblclient WHERE id=".$_GET['q'];
$query = $conn->query($sql);
$urow = $query->fetch_assoc();
}
$id=$urow['id'] ;
$lname= $urow['lname'] ;					
$fname=$urow['fname'] ;
$mi=$urow['mi'] ;
$address=$urow['address'] ;
$contact=$urow['contact'] ;
$meternum=$urow['meternum'] ;


$sql = "SELECT * FROM tblclientuser WHERE clientID=".$_GET['q'];
$query = $conn->query($sql);
$urow = $query->fetch_assoc();
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
			Update Account
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Clients</a></li>
            <li class="active">Data tables</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
           <div class="row">
            <div class="col-xs-12">
               <!-- general form elements -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Member Name: <?php echo $fname.' '.$mi.' '.$lname;?></h3>
				  <a href="clients.php" class="btn btn-success btn-sm pull-right"><i class="fa fa-share"></i></a>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="memEditusersave.php" method="POST">
                  <div class="box-body">
                    <div class="form-group">
					   <label>Username</label>
						<input class="form-control" name="username" value="<?php echo $urow['username'];?>" placeholder="username" required>
						<input type="hidden" class="form-control" name="id" value="<?php echo $id;?>" required>
					  </div>
					  <div class="form-group">
					   <label>Password</label>
						<input class="form-control" name="password" value="<?php echo $urow['password'];?>" placeholder="password" required>
					  </div>
					   
                  </div><!-- /.box-body -->
                  <div class="box-footer">
                    <button type="submit" name="btnUpdate" class="btn btn-primary">Update </button>
                  </div>
                </form>
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
	<?php require_once "includes/scripts.php";?>
  </body>
</html>
