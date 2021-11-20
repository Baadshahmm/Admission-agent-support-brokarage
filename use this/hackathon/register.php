<?php
session_start();
if (isset($_SESSION['userSession'])!="") {
 header("Location: login.php");
}
require_once 'connect.php';

if(isset($_POST['register'])) {

 $fname = strip_tags($_POST['fname']);

 $mname = strip_tags($_POST['mname']);

 $lname = strip_tags($_POST['lname']);

 $email = strip_tags($_POST['email']);
 $password = strip_tags($_POST['password']);
 $gender = strip_tags($_POST['gender']);
 
 $education = strip_tags($_POST['education']);
 
 $contact = strip_tags($_POST['contact']);


 $fname = $DBcon->real_escape_string($fname);

 $mname = $DBcon->real_escape_string($mname);

 $lname = $DBcon->real_escape_string($lname);
 $email = $DBcon->real_escape_string($email);
 $password = $DBcon->real_escape_string($password);

 $gender = $DBcon->real_escape_string($gender);
 $education = $DBcon->real_escape_string($education);
 $contact = $DBcon->real_escape_string($contact);

 $hashed_password = password_hash($password, PASSWORD_DEFAULT); // this function works only in PHP 5.5 or latest version

 $check_email = $DBcon->query("SELECT email FROM agent_registration WHERE email='$email'");
 $count=$check_email->num_rows;

 if ($count==0) {

  $query = "INSERT INTO agent_registration(fname,mname,lname,email,password,gender,education,contact) VALUES('$fname','$mname','$lname', '$email','$hashed_password','$gender','$education','$contact' )";

  if ($DBcon->query($query)) {
   $msg = "<div class='alert alert-success'>
      <span class='glyphicon glyphicon-info-sign'></span> &nbsp; successfully registered !
     </div>";
     echo '<script language="text/javascript">';
     echo 'alert("You have successfully registered")';
     echo '</script>';

  }else {
   $msg = "<div class='alert alert-danger'>
      <span class='glyphicon glyphicon-info-sign'></span> &nbsp; error while registering !
     </div>";
  }

 } else {


  $msg = "<div class='alert alert-danger'>
     <span class='glyphicon glyphicon-info-sign'></span> &nbsp; sorry email already taken !
    </div>";

 }

 $DBcon->close();
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Agent Registration</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	
<br><br><br><br>
<div class="row">
	<div class="col-xs-4"><span></span></div>
	<div class="col-xs-4">
		<h1>Sign-up</h1>
	</div>
</div>
<div class="row">
	

<div class="col-xs-4">
	<span></span>
</div>
<div class="col-xs-4">
<form method="POST" >
  	<div class="form-group">
      
      <input type="text" class="form-control"  placeholder="First Name" name="fname" required pattern="^[A-Za-z]+">
    </div>

    <div class="form-group">
      
      <input type="text" class="form-control" placeholder="Middle Name" name="mname" required pattern="^[A-Za-z]+">
    </div>

    <div class="form-group">
      
      <input type="text" class="form-control"  placeholder="Last Name" name="lname" required pattern="^[A-Za-z]+">
    </div>


    <div class="form-group">
      
      <input type="email" class="form-control"  placeholder="Email Address" name="email" pattern="^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$" required >
    </div>


    <div class="form-group">
      
      <input type="password" class="form-control"  placeholder="Password" name="password" required pattern="^[a-zA-Z]\w{3,14}$" >
    </div>
    <div class="form-group">
      
      <div class="form-group">
        <form>
        
    <label class="radio-inline">
      <input type="radio" name="gender" checked>Male
    </label>
    <label class="radio-inline">
      <input type="radio" name="gender">Female
    </label>
   
      </form>
      
    </div>

    <div class="form-group">
      
      <input type="text" class="form-control"  placeholder="Highest Education" name="education" required pattern="^[A-Za-z0-9]+">
    </div>

      <input type="tel" class="form-control"  placeholder="Contact Number" name="contact" required pattern="^[0-9]+">
    </div>
    <div class="form-group">
      
  </form>
</div>

	</div>
	</div>
	<br>
<div class="container">
  <button type="register" class="btn btn-primary btn-lg" style="margin-left:450px;">Register</button>
  <button type="login" class="btn btn-primary btn-lg" style="margin-left:50px;"><a href="login.php" style="color:white; text-decoration: none;">LogIn</a></button>
</div>


</body>
</html>