<?php
session_start();
if (isset($_SESSION['userSession'])!="") {
 header("Location: login.php");
}
require '../common/connect.php';

if(isset($_POST['register'])) {

 $licencenum = $_POST['licencenum'];

 $experience = $_POST['experience'];
 echo $licencenum;
 echo $experience;

 $id = $_POST['id'];

 $uname = $_POST['uname'];




  $query = "UPDATE agent_registration SET `licencenum`='$licencenum',`experience`=$experience where `id`='$id'";
$res=mysqli_query($con,$query);
  if ($res) {
   $msg = "<div class='alert alert-success'>
      <span class='glyphicon glyphicon-info-sign'></span> &nbsp; successfully registered !
     </div>";
     echo '<script language="text/javascript">';
     echo 'alert("You have successfully registered")';
     echo '</script>';
     header("location:index.php");

  

 } else {


  $msg = "<div class='alert alert-danger'>
     <span class='glyphicon glyphicon-info-sign'></span> &nbsp; sorry email already taken !
    </div>";

 }
}
?>