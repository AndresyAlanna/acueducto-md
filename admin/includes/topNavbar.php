    <header class="main-header">
        <!-- Logo -->
        <a href="#" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>A</b>MD</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><b>Acueduto</b> MD</span>
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
                  <img src="../dist/img/user0-128x128.jpg" class="user-image" alt="User Image" />
                  <span class="hidden-xs"><?php echo $user['role'];?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="../dist/img/user0-128x128.jpg" class="img-circle" alt="User Image" />
                    <p>
                      <?php echo $user['role'];?> - <?php echo $user['role'];?>
                      <small>Miembro desde <?php echo date('M d, Y', strtotime($user['created_on']));?></small>
                    </p>
                  </li>
                  <!-- Menu Body -->
					
                  <!-- Menu Footer-->
                  <li class="user-footer">
				  <div class="pull-left">
                     <a href="#updatemodal" data-toggle="modal"  class="btn btn-default btn-flat">Actualizar</a>
                    </div>
                    <div class="pull-right">
                      <a href="#logoutuser" data-toggle="modal" class="btn btn-default btn-flat">Cerrar sesión</a>
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