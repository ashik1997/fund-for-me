<?php
   include '../config.php';
  session_start();
  if ( empty($_SESSION['userName'])){
    header("Location: login.php");
  }
 ?>
<!DOCTYPE html>
<html>
<head>
  <link rel="icon" href="../assets/img/favicon.ico" type="image/x-icon">
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>fmm</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">


    <!-- Google Font -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include 'menu.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="box">
            <div class="box-header">
                <h2 class="box-title"> Donation List</h2>
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="overflow-x: auto;">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>User email</th>
                        <th>Method</th>
                        <th>Trx no.</th>
                        <th>Tk</th>
                        <th>Event</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                      <?php
                        if (isset($_POST['delete'])) {
                          $id = $_POST['id'];
                          $sql = "DELETE FROM donation WHERE id='$id'";
                          if (mysqli_query($con, $sql)) {
                              echo "Record deleted successfully";
                          } else {
                              echo "Error deleting record: " . mysqli_error($con);
                          }
                        }
                        if (isset($_POST['update'])) {
                          $id = $_POST['id'];
                          $sql = "UPDATE donation set status = 1 WHERE id='$id'";
                          if (mysqli_query($con, $sql)) {
                              echo "Record update successfully";
                          } else {
                              echo "Error deleting record: " . mysqli_error($con);
                          }
                        }

                        $sql_donation = "SELECT * from donation where status=1 order by id desc";
                        $query_donation = mysqli_query($con,$sql_donation);
                        $sl = 1;
                        while($info = mysqli_fetch_array($query_donation)) {
                        ?>
                        <tr>
                          <td><?php echo $sl;?></td>
                          <td><?php echo $info['user_email'];?></td>
                          <td><?php echo $info['method_name'];?></td>
                          <td><?php echo $info['transection_no'];?></td>
                          <td><?php echo $info['donation_amount'];?></td>
                          <td><a class="btn btn-primary text-on-primary"  href="../cause-single.php?blog_id=<?php echo $info['event_id'];?>">Event Details</a></td>                          
                          <td>
		                    <form method="post" action="">
		                    	<input type="hidden" name="id" value="<?php echo $info['id']; ?>">
		                    	<button type="submit" name="delete" class="btn btn-danger">DELETE</button>
		                    </form>
                          </td>
                    	</tr>
                      <?php $sl++; } ?> 
                    </tbody>
                </table>
            </div>
            <!-- /.box-body -->
        </div>
      <!-- /.row -->

      <!-- Main row -->

      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer text-right">
    <strong> &copy; 2018 <a href="http://www.softcareit.com/"  target="_blank"> SoftCare IT </a>. All rights resereved.</strong>
  </footer>


</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
<script>
    $(function () {
        $('#example1').DataTable()
    })
</script>
</body>
</html>
