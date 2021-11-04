
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Admin | Log in</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.4 -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="plugins/iCheck/square/blue.css" rel="stylesheet" type="text/css" />
  </head>
  <body class="login-page" style="background:#eee">
    <div class="login-box">
      <div class="login-logo">
             <img src="images/logo-acueducto.png" alt="" width="110" height="110">
      </div>
      <div class="login-logo">
        <a href="#"><b>Acueducto</b> Minuto Dios</a>
      </div><!-- /.login-logo -->
      

      <div class="login-box-body">
        <p class="login-box-msg">Regístrese para iniciar su sesión</p>
        <form action="#" method="post">
          <div class="form-group has-feedback">
            <input type="text" class="form-control" placeholder="username" name="username"/>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" name="password" placeholder="Password" />
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-8">
              <div class="checkbox icheck">
                <label>
                  <input type="checkbox"> Recordarme
                </label>
              </div>
            </div><!-- /.col -->        


            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat" name="login">Ingresar</button>
            </div><!-- /.col -->
          </div>
		  <?php 
		 include("admin/includes/conn.php");
		 session_start();
		 if(isset($_POST['login']))
        { 
            $username = $_POST['username'];			
			$password = $_POST['password'];

            $sql = mysqli_query($conn, "SELECT * FROM tblclientuser WHERE username = '$username' and password = '$password' and acc_status='1'");
            $result = mysqli_num_rows($sql);
		
            if($result > 0)
            {
                while($row = mysqli_fetch_array($sql)){

                    $_SESSION['userid']=$row['id'];
					$_SESSION['logged']="true";
					$session = "1";	
				  if($row['role'] == "Admin")
					{	
						header('location: admin/dashboard.php');
					}
					else if($row['role'] == "Member")
					{	
						//header("location:appclient/viewBill.php");
					}
					else
					{
						$_SESSION['error'] = 'Your account maybe not approved';
						
					}
                }    
 
            }else
            {
            $_SESSION['error']='incorrect username and password';
               
            }
             
        }
		
	?>
        </form>
      </div><!-- /.login-box-body -->
	  <br>
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
    </div><!-- /.login-box -->

    <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js" type="text/javascript"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
  </body>
</html>
