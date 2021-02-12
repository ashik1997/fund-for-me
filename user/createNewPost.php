<?php
  session_start();
  if ( empty($_SESSION['uEmail'])){
    header("Location: ../loginReg.php");
  }
  include '../config.php';
 
$message = "";
if (isset($_POST['add_new'])) {
$title = $_POST['title'];
$cat_id = $_POST['cat_id'];
$description = $_POST['description'];
$donation_amount = $_POST['donation_amount'];
$expire_date = $_POST['expire_date'];
$user_email = $_SESSION['uEmail'];

 $image = $_FILES['image']['name'];
    $temp1 = explode(".",$_FILES["image"]["name"]);
    $newfilename1 = uniqid('', true).'.' . end($temp1);
    $target = "../images/event/".$newfilename1;

 $pdf = $_FILES['pdf']['name'];
    $temp2 = explode(".",$_FILES["pdf"]["name"]);
    $newfilename2 = uniqid('', true).'.' . end($temp2);
    $target1 = "../images/event/".$newfilename2;
 
$sql_add_event = "INSERT INTO event(title,description,donation_amount,expire_date,user_email,image,pdf,cat_id)
VALUES ('$title','$description','$donation_amount','$expire_date','$user_email','$newfilename1','$newfilename2','$cat_id')";
// echo $sql;
$query_add_event = mysqli_query($con,$sql_add_event);
if ($query_add_event) {

move_uploaded_file($_FILES['image']['tmp_name'], $target);
move_uploaded_file($_FILES['pdf']['tmp_name'], $target1);

 

  $message = '<div class="alert alert-success">
  <strong>Success!</strong> New record created successfully !
</div>';
}else{
  $message = "Error: " . $sql_add_event . "<br>" . mysqli_error($con);
}
}
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" href="../assets/img/favicon.ico" type="image/x-icon">
  <title>fmm | Create Post</title>
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
      Event
        <small> Post</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Event</a></li>
        <li class=""> Post</li>
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
            <label>Tittle:</label>
            <input class="form-control" type="text" name="title" placeholder="Tittle">
          </div>
          <div class="form-group">
            <label>Category:</label>
            <select class="form-control" name="cat_id">
              <?php 
              $sql = "SELECT * FROM categories order by id desc";
              $result = mysqli_query($con, $sql);
              if (mysqli_num_rows($result) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($result)) {
              ?>
              <option value="<?php echo $row['id'] ?>"><?php echo $row['name'] ?></option>
              <?php }} ?>
            </select>
          </div>
          <div class="form-group">
            <label>Description:</label>
            <textarea class="form-control" id="editor1" name="description" rows="20" cols="80"></textarea>
          </div>
           
          <div class="form-group">
            <label>Donation Amount</label>
            <input class="form-control" type="text" name="donation_amount" placeholder=" Donation Amount">
          </div>
          <div class="form-group">
            <label>Expire Date</label>
            <input class="form-control" type="date" name="expire_date" placeholder="Expire Date">
          </div>
          <div class="form-group">
            <label>Image:</label>
            <input class="form-control-file" type="file" name="image">
          </div>
          <div class="form-group">
            <label>Pdf-Upload:</label>
            <input class="form-control-file" type="file" name="pdf">
          </div>

          <div class="form-group">
            <input class="btn btn-success btn-lg" type="submit" name="add_new" value="Post">
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
<!-- CK Editor -->
<script src="bower_components/ckeditor/ckeditor.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<script>
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })
  $(function () {
      $('#example1').DataTable()
  })
</script>
</body>
</html>