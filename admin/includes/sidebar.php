     <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="../dist/img/user0-128x128.jpg" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p><?php echo $user['role'];?></p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">NAVEGACIÓN PRINCIPAL</li>
            <li class="active treeview">
              <a href="dashboard.php">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
              </a>
            </li>
            <li><a href="clients.php"><i class="fa fa-user"></i> <span>Clientes</span></a></li>
            <li><a href="bill.php"><i class="fa fa-money"></i> <span>Facturación</span></a></li>
			<li class="header">DETALLES DE LA CUENTA</li>
            <li><a href="member.php"><i class="fa fa-list-ul" aria-hidden="true"></i> <span>Suscriptores</span></a></li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>