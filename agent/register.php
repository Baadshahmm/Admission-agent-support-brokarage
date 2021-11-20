
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
	<?php include '../common/header.php' ?>
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
  <form method="POST" action="resume.php">

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

    <div class="form-check form-check-inline">
      <input type="radio" name="gender" class="form-check-input" id="g1" value="male">
      <label class="form-check-label" for="g1">Male</label>

      <input type="radio" name="gender" class="form-check-input" id="g1" value="female">
      <label class="form-check-label" for="g1">Female</label>
    </div>

    <div class="form-group">
      <input type="text" class="form-control"  placeholder="Highest Education" name="education" required pattern="^[A-Za-z0-9]+">
    </div>

    <div class="form-group">
      <input type="text" class="form-control"  placeholder="username" name="uname">
    </div>

    <div class="form-group">
      <input type="tel" class="form-control"  placeholder="Contact Number" name="contact" required pattern="^[0-9]+">
    </div>

     <div class="form-group">
      <input class="btn btn-primary" type="submit" id="register" name="register" value="Register" style="width: 150px;">
      <a href="login.php"><button class="btn btn-primary" style="float: right; width: 150px;">Login</button></a>
    </div>


      
  </form>
</div>

	</div>
	<br><br><br><br>
  <?php include '../common/footer.php' ?>


</body>
</html>