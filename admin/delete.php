
<?php 
include "../config.php";

$id = $_GET['id'];

if($id > 0){

  // Check record exists
  $checkRecord = mysqli_query($con,"SELECT * FROM event WHERE id=".$id);
  $totalrows = mysqli_num_rows($checkRecord);

  if($totalrows > 0){
    // Delete record
    $query = "DELETE FROM event WHERE id=".$id;
    mysqli_query($con,$query);
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    nlink('../images/event/'.$_GET['image']);
    nlink('../images/event/'.$_GET['pdf']);
  }
}

header('Location: ' . $_SERVER['HTTP_REFERER']);
?>