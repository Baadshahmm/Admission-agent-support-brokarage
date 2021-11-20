<?php  
	session_start();
	if(isset($_SESSION['username'])){
		header("location:index.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Lifestyle Store</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<?php 
		include '../common/header.php';
	?>
	

			<br><br><br><br>

		<div class="row">
			<div class="col-xs-4"><span></span></div>
			<div class="col-xs-4">
	  <p class="text-warning"><h3>Login to Book an Agent</h3></p>
	  <div class="panel panel-primary">
	    <div class="panel-body">
	    	
	    <form method="POST" action="login_submit.php">
		    <div class="form-group">
		      <label for="email">Username:</label>
		      <input type="text" class="form-control" id="username" placeholder="Enter username" name="username">
		    </div>
		    <div class="form-group">
		      <label for="pwd">Password:</label>
		      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
		    </div>
		    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
	  </form>
	    </div>
	    <div class="panel-footer">
	    	<p>Don't have an account?       </p>
	    	<a href="register.php"><button type="submit" class="btn btn-primary">Register</button></a>
	    </div>
	  </div>
	</div>
</div>
</div>

</body>
<?php
    include '../common/footer.php';
  ?>
</html>