<?php 
  session_start();
  $error = "";
  if(isset($_POST['submit'])){
    $userName = $_POST['userName'];
    $password = md5($_POST['password']);
    $sql = "SELECT userName,password from admin where userName = '$userName'";
    $query = mysqli_query($con, $sql);
    $adminInfo = mysqli_fetch_array($query);

    if($adminInfo['userName'] != $userName){
      $error = "Wrong User Name";
    }
    else{
      if($adminInfo['password'] != $password){
        $error = "Wrong Password";
      }
      else{
          $_SESSION['userName'] = $adminInfo['userName'];
              header("Location: index.php");
          
      }
    }
  }
?>