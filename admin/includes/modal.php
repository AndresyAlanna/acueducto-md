<div class="modal fade" id="addclients">
	<div class="modal-dialog">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title">Información de Cliente</h4>
		  </div>
		  <div class="modal-body">
		  <form action="clientsSave.php" method="POST">
			<div class="form-group">
			   <label>Número de cliente</label>
				<input class="form-control" name="cnumber" value="<?php echo $finalcode;?>" placeholder="Numero de cliente" required>
			  </div>
			 <div class="form-group">
			   <label>Primer Nombre</label>
				<input class="form-control" name="fname" placeholder="Primer nombre" required>
			  </div>
			  <div class="form-group">
			   <label>Segundo Nombre</label>
				<input class="form-control" name="mi" placeholder="Segundo nombre" required>
			  </div>
			   <div class="form-group">
			   <label>Apellidos</label>
				<input class="form-control" name="lname" placeholder="Apellidos" required>
			  </div>
			   <div class="form-group">
			   <label>Dirección</label>
				<input class="form-control" name="address" placeholder="Dirección" required>
			  </div>
			   <div class="form-group">
			   <label>Teléfono</label>
				<input class="form-control" name="contact" placeholder="Teléfono" required>
			  </div>
			   <div class="form-group">
			   <h4 class="modal-title">Obligatorio <span class="text-danger">*</span></h4>
			   </div>
			   <div class="form-group">
			   <label>Número de medidor</label>
				<input class="form-control" name="meternum" placeholder="Número de serie medidor" required>
			  </div>
			  <div class="form-group">
			   <label>Primera lectura del medidor</label>
				<input class="form-control" name="meterReader" placeholder="Primera lectura del medidor" required>
			  </div>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
			<button type="submit" class="btn btn-primary" name="btnregister">Registrar</button>
		  </div>
		  </form>
		</div><!-- /.modal-content -->
	</div><!-- /.modal -->
  </div><!-- /.example-modal -->
  
  
  <div class="modal fade" id="updatemodal">
	<div class="modal-dialog">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title">Actualizar Información</h4>
		  </div>
		  <div class="modal-body">
		  <form action="profileupdate.php" method="POST">
			<div class="form-group">
				<input class="form-control" type="hidden" name="userid" value="<?php echo $_SESSION['userid'];?>" placeholder="Número de cliente" required>
			  </div>
			 <div class="form-group">
			   <label>Nombre completo</label>
				<input class="form-control" name="name" value="<?php echo $user['name'];?>" placeholder="Nombre completo" required>
			  </div>
			  <div class="form-group">
			   <label>Nueva contraseña</label>
				<input class="form-control" name="password" placeholder="Contraseña" required>
			  </div>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Canclar</button>
			<button type="submit" class="btn btn-primary" name="btnupdate">Guardar Cambios</button>
		  </div>
		  </form>
		</div><!-- /.modal-content -->
	</div><!-- /.modal -->
  </div><!-- /.example-modal -->


<div class="modal fade" id="logoutuser">
    <div class="modal-dialog">
        <div class="modal-content">
          	<div class="modal-header">
            	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
              		<span aria-hidden="true">&times;</span></button>
            	<h4 class="modal-title">POR FAVOR CONFIRMAR</h4>
          	</div>
          	<div class="modal-body">
            		<div class="text-center">
	                	<p>¿Estás segura de que quieres cerrar sesión ahora?</p>
	            	</div>
          	</div>
          	<div class="modal-footer">
            	<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> No</button>
            	<a href="logout.php" class="btn btn-danger btn-flat"><i class="glyphicon glyphicon-log-out"></i> Si</a>
          	</div>
        </div>
    </div>
</div>