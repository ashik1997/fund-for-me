<?php
  session_start();
  if ( empty($_SESSION['userName'])){
    header("Location: ../login.php");
  }
  include '../config.php';
 
$message = "";
if (isset($_POST['save'])) {
	$user_name = $_POST['user_name'];
	$pwd = md5($_POST['pwd']);
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$role = $_POST['role'];

	$sql = " INSERT INTO `admin`(`userName`, `password`, `name`, `phone`, `role`) VALUES ('$user_name','$pwd','$name','$phone','$role') ";
	$query = mysqli_query($con,$sql);
	if($query){
		$message = '<div class="alert alert-success alert-dismissible fade in">
	    <strong>Successfully added</strong>
	    </div>';
	}
	else{
		$message = '<div class="alert alert-danger alert-dismissible fade in">
	    <strong>Something wrong</strong>
	    </div>';
	}
}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" href="../assets/img/favicon.ico" type="image/x-icon">
  <title>fmm | Users</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
  <?php include 'menu.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
      Add New
        <small> Employee</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Add New</a></li>
        <li class=""> Employee</li>
      </ol>
    </section>

    <!-- Main content -->

    <section class="content">
      <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">
                <small></small>
              </h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-info btn-sm" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-info btn-sm" data-widget="remove" data-toggle="tooltip"
                        title="Remove">
                  <i class="fa fa-times"></i></button>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
              <div class="col-md-12">
          <span><?php echo $message; ?></span>
        <form action="" method="POST" enctype="multipart/form-data">
          <div class="form-group">
            <label>Name</label>
            <input class="form-control" type="text" name="name" placeholder="Name">
          </div>
          <div class="form-group">
            <label>Phone</label>
            <input class="form-control" type="text" name="phone" placeholder="Phone no.">
          </div>
          <div class="form-group">
            <label>Role</label>
            <select class="form-control" name="role">
              <option value="admin">Admin</option>
              <option value="employee">Employee</option>
            </select>
          </div>
          <div class="form-group">
            <label>Username</label>
            <input class="form-control" type="text" name="user_name" placeholder="Username">
          </div>
          <div class="form-group">
            <label>Password</label>
            <input class="form-control" type="text" name="pwd" placeholder="Password">
          </div>
          <div class="form-group">
            <input class="btn btn-success btn-lg" type="submit" name="save" value="Save">
          </div>
        </form>
      </div>
            </div>
          </div>

  <!-- image url show -->
  
    </section>

    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer text-right">
    <strong> &copy; 2018 <a href="http://www.softcareit.com/"  target="_blank"> SoftCare IT </a>. All rights resereved.</strong>
  </footer>

  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<!-- DataTables -->
<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
</body>
</html>