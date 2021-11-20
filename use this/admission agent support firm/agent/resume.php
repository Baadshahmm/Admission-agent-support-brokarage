<?php
session_start();
if (isset($_SESSION['userSession'])!="") {
 header("Location: login.php");
}
require '../common/connect.php';

if(isset($_POST['register'])) {

 $fname = $_POST['fname'];

 $mname = $_POST['mname'];

 $lname = $_POST['lname'];

 $email = $_POST['email'];
 $password = $_POST['password'];
 $gender = $_POST['gender'];
 
 $education = $_POST['education'];
 
 $contact = $_POST['contact'];
 $uname=$_POST['uname'];




  $query = "INSERT INTO agent_registration(uname,fname,mname,lname,email,password,gender,education,contact) VALUES('$uname', '$fname','$mname','$lname', '$email','$password','$gender','$education','$contact' )";
$res=mysqli_query($con,$query);
  if ($res) {
   $msg = "<div class='alert alert-success'>
      <span class='glyphicon glyphicon-info-sign'></span> &nbsp; successfully registered !
     </div>";
     echo '<script language="text/javascript">';
     echo 'alert("You have successfully registered")';
     echo '</script>';

     $query1 = "SELECT * from agent_registration where uname='$uname'";
     $res=mysqli_query($con,$query1);
     $row=mysqli_fetch_assoc($res);
     $id=$row['id'];
     echo $id;

  

 } else {


  $msg = "<div class='alert alert-danger'>
     <span class='glyphicon glyphicon-info-sign'></span> &nbsp; sorry email already taken !
    </div>";

 }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Lifestyle Store</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
  <link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
  <?php include '../common/header.php' ?>
  
<div class="container" style="width:100%;">  
                <h1 align="center">Insert Resume Here</h1>  

                <br />  
                <form method="post" action="details.php" enctype="multipart/form-data">  
                     <input type="file" name="image" id="image" />
                     <p style="color: #a3a1a0">File size must be less than 64kb if not so <a href="http://compressimage.toolur.com/">Click Here</a></p>  
                     <br />  
                     <input type="hidden" name="id" value="<?php echo $id; ?>"> 
                     <input type="hidden" name="uname" value="<?php echo $uname; ?>"> 
                     <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-info" />  
                </form>  
                <br />  
                <br />    
           </div>  
  <br><br><br>
<?php
    include '../common/footer.php';
  ?>

</body>
</html>