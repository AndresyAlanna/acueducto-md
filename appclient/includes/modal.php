<div class="modal fade" id="updatemodal">
	<div class="modal-dialog">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title">Update Information</h4>
		  </div>
		  <div class="modal-body">
		  <form action="userprofileupdate.php" method="POST">
			 <div class="form-group">
			   <label>First Name</label>
			   <input class="form-control" name="userid" type="hidden" value="<?php echo $urow['id'];?>" required>
				<input class="form-control" name="fname" value="<?php echo $urow['fname'];?>" placeholder="firstname" required>
			  </div>
			  <div class="form-group">
			   <label>Middle Name</label>
				<input class="form-control" name="mi" value="<?php echo $urow['mi'];?>"  placeholder="Middle name" required>
			  </div>
			   <div class="form-group">
			   <label>Last Name</label>
				<input class="form-control" name="lname" value="<?php echo $urow['lname'];?>"  placeholder="Lastname" required>
			  </div>
			   <div class="form-group">
			   <label>Address</label>
				<input class="form-control" name="address" value="<?php echo $urow['address'];?>"  placeholder="Address" required>
			  </div>
			   <div class="form-group">
			   <label>Contact</label>
				<input class="form-control" name="contact" value="<?php echo $urow['contact'];?>"  placeholder="Contact" required>
			  </div>
			  <div class="form-group">
			   <label>Password</label>
				<input class="form-control" name="password" value="<?php echo $user['password'];?>"  placeholder="Contact" required>
			  </div>
		  </div>
		  <div class="modal-footer">
			<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			<button type="submit" class="btn btn-primary" name="btnupdate">Update</button>
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
            	<h4 class="modal-title">PLEASE CONFIRM</h4>
          	</div>
          	<div class="modal-body">
            		<div class="text-center">
	                	<p>Are you sure you want to logout now?</p>
	            	</div>
          	</div>
          	<div class="modal-footer">
            	<button type="button" class="btn btn-default btn-flat pull-left" data-dismiss="modal"><i class="fa fa-close"></i> No</button>
            	<a href="logout.php" class="btn btn-danger btn-flat"><i class="glyphicon glyphicon-log-out"></i> Yes</a>
          	</div>
        </div>
    </div>
</div>