    <header class="main-header">
        <!-- Logo -->
        <a href="#" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>W</b>BS</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Water</b> Billing System</span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">

              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="../dist/img/user2-160x160.jpg" class="user-image" alt="User Image" />
                  <span class="hidden-xs"><?php echo $urow['fname'].' '.$urow['mi'].' '.$urow['lname'];?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
                    <p>
                      <?php echo $urow['fname'].' '.$urow['mi'].' '.$urow['lname'];?>
                      <small>Member since <?php echo date('M d, Y', strtotime($user['created_on']));?></small>
                    </p>
                  </li>
                  <!-- Menu Footer-->
                  <li class="user-footer">
				  <div class="pull-left">
                     <a href="#updatemodal" data-toggle="modal"  class="btn btn-default btn-flat"> Update</a>
                    </div>
                    <div class="pull-right">
                      <a href="#logoutuser" data-toggle="modal" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>

            </ul>
          </div>
        </nav>
      </header>
	  <?php
	//creating employeeid

		$numbers = '';
		for($i = 0; $i < 10; $i++){
			$numbers .= $i;
		}
		$finalcode = '000'.substr(str_shuffle($numbers), 0, 9);
	?>