<?php
  session_start();
  if ( empty($_SESSION['userName'])){
    header("Location: ../login.php");
  }
  include '../config.php';
 
$message = "";
if (isset($_POST['add_new'])) {



    $temp1 = explode(".",$_FILES["image1"]["name"]);
    $newfilename1 = uniqid('', true).'.' . end($temp1);
    $target1 = "../images/gallery/".$newfilename1;

    $temp2 = explode(".",$_FILES["image2"]["name"]);
    $newfilename2 = uniqid('', true).'.' . end($temp2);
    $target2 = "../images/gallery/".$newfilename2;

    $temp3 = explode(".",$_FILES["image3"]["name"]);
    $newfilename3 = uniqid('', true).'.' . end($temp3);
    $target3 = "../images/gallery/".$newfilename3;

    $temp4 = explode(".",$_FILES["image4"]["name"]);
    $newfilename4 = uniqid('', true).'.' . end($temp4);
    $target4 = "../images/gallery/".$newfilename4;

 
 
 

 //echo"'$drname', '$pname', '$phonenum','$amount'";
$sql_add_gallery = "INSERT INTO gallery(image1,image2,image3,image4)
VALUES ('$newfilename1','$newfilename2','$newfilename3','$newfilename4')";
// echo $sql;
$query_add_gallery = mysqli_query($con,$sql_add_gallery);
if ($query_add_gallery) {

move_uploaded_file($_FILES['image1']['tmp_name'], $target1);
move_uploaded_file($_FILES['image2']['tmp_name'], $target2);
move_uploaded_file($_FILES['image3']['tmp_name'], $target3);
move_uploaded_file($_FILES['image4']['tmp_name'], $target4);

 

  $message = '<div class="alert alert-success">
  <strong>Success!</strong> New record created successfully !
</div>';
}else{
  $message = '<div class="alert alert-danger">
  <strong>Success!</strong> Faild !
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
      Gallery
        <small> Post</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Gallery</a></li>
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
            <label>Image1:</label>
            <input class="form-control-file" type="file" name="image1">
          </div>
          <div class="form-group">
            <label>Image2:</label>
            <input class="form-control-file" type="file" name="image2">
          </div>
          <div class="form-group">
            <label>Image3:</label>
            <input class="form-control-file" type="file" name="image3">
          </div>
          <div class="form-group">
            <label>Image4:</label>
            <input class="form-control-file" type="file" name="image4">
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