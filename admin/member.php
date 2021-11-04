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
		  Registros de Suscriptores
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Clientes</a></li>
            <li class="active">Tabla de datos</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
           <div class="row">
            <div class="col-xs-12">
               <div class="box box-info">
                <div class="box-header">
                  <h3 class="box-title"><i class="fa fa-list"></i> Lista de Suscriptores</h3>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive">
                  <table id="example1" class="table table-hover">
                    <thead>
                      <tr>
                        <th>Nombre</th>
                        <th>Usuario</th>
                        <th>Contraseña</th>
                        <th>Fecha suscripción</th>
                        <th>Perfil </th>
                        <th>Estado</th>
                        <th>Acciones</th>
                      </tr>
                    </thead>
                    <tbody>
				      <?php
                    $sql = "SELECT * FROM tblclientuser INNER JOIN tblclient ON tblclientuser.clientID=tblclient.id WHERE clientID != '".$_SESSION['userid']."'";
                    $query = $conn->query($sql);
                    while($row = $query->fetch_assoc()){
                      ?>
                        <tr>
						    <td><?php echo $row['lname'].', '.$row['mi'].' '.$row['fname']; ?>	</td>
							<td><?php echo $row['username']; ?></td>
							<td><?php echo $row['password']; ?></td>
							<td><?php echo $row['created_on']; ?></td>
							<td><?php echo $row['role']; ?></td>
							<td>
							<?php 
								if ($row['acc_status'] =="1"){
									echo '<i class="fa fa-circle text-success"></i><span> Active</span>
									<a href="memDeactive.php?deactive='.$row['clientID'].'">
								<i class="fa fa-check-square-o pull-right"></i></a>
								
									';
								}elseif($row['acc_status']=="0"){
									echo '<i class="fa fa-circle text-danger"></i> <span> Disabled</span>
										<span class="pull-right"><a href="memActive.php?active='.$row['clientID'].'"><i class="fa fa-check-square-o"></i></a></span>
									';
								}
							?>
							</td>
                          
							<td>
						  <a href="memEdituser.php?q=<?php echo $row['clientID']; ?>" class="btn btn-success btn-sm"><i class="fa fa-edit"></i></a>
						  <a href="javascript:memDelete(<?php echo $row['clientID']; ?>)" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></a>
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
