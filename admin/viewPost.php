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
                <h2 class="box-title"> View  Event </h2>
            </div>
            <!-- /.box-header -->
            <div class="box-body" style="overflow-x: auto;">
                <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                        <th>Serial No</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Donation Amount</th>
                        <th>Donated Amount</th>
                        <th>PExpire Date</th>
                        <th>Image</th>
                        <th>Pdf</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                   		<?php
                        $serialNo = 1;
                        $sqlFor_event = "SELECT * from event where user_email='admin' order by id desc";
                        $queryFor_event = mysqli_query($con,$sqlFor_event);
                        while($info = mysqli_fetch_array($queryFor_event)) {
                        ?>
                        <tr>
                        <td><?php echo $serialNo;?></td>
                        <td><?php echo $info['title'];?></td>
                        <td><?php echo $info['description'];?></td>
                        <td><?php echo $info['donation_amount'];?></td>
                        <td><?php 
                                $sql_donetion = "SELECT sum(donation_amount) as total_donation_amount FROM donation where event_id='".$info['id']."'";
                                $row_donetion = mysqli_fetch_assoc(mysqli_query($con, $sql_donetion));
                                echo $row_donetion['total_donation_amount'];
                               ?></td>
                        <td><?php echo $info['expire_date'];?></td>
                          <td><img width="70" src="../images/event/<?php echo $info['image'];?>"></td>
                               <td><a class="btn btn-primary" href="../images/event/<?php echo $info['pdf'];?>"><i class="fa  fa-download"></i></a></td>
                        <td>
                          <a class="btn btn-success" href="delete.php?id=<?php echo $info['id'];?>&image=<?php echo $info['image'];?>&pdf=<?php echo $info['pdf'];?>"><i class="fa fa-trash"></i></a>
                          <a class="btn btn-primary text-on-primary"  href="../cause-single.php?blog_id=<?php echo $info['id'];?>">Event Details</a>
                        </td>
                    </tr>
                    <?php $serialNo++;}?>
                    </tbody>
                    <tfoot>
                    <tr>
                       <th>Serial No</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Donation Amount</th>
                        <th>Donated Amount</th>
                        <th>PExpire Date</th>
                        <th>Image</th>
                        <th>Pdf</th>
                        <th>Action</th>
                    </tr>
                    </tfoot>
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
