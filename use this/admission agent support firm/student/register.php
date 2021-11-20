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
  <link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>



  <script>
    $(document).ready(function(){
      var date_input=$('input[name="date"]'); //our date input has the name "date"
      var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
      var options={
        format: 'mm/dd/yyyy',
        container: container,
        todayHighlight: true,
        autoclose: true,
      };
      date_input.datepicker(options);
    })
</script>

	<?php 
		include '../common/header.php'; 
	?>
<br><br><br><br>
<a href="login.php"><button type="submit" style="width: 200px; margin-left: 42%;" class="btn btn-primary">Have an Account</button></a>
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
<form method="POST" action="student-details.php">
  	
    <div class="form-group">
      <input type="text" class="form-control" id="fname" placeholder="First Name*" name="fname">
    </div>
    
    <div class="form-group">  
      <input type="text" class="form-control" id="mname" placeholder="Enter Father's Name Here*" name="mname">
    </div>

    <div class="form-group">  
      <input type="text" class="form-control" id="lname" placeholder="Enter Last Here*" name="lname">
    </div>

    <div class="form-group">  
      <input type="text" class="form-control" id="flname" placeholder="Formal Last Name (Optional)" name="flname">
    </div>

    <div class="form-group">  
      <input type="text" class="form-control" id="prefname" placeholder="Enter Preferred Name Here*" name="prefname">
    </div>

    <div class="form-check form-check-inline">
      <input type="radio" name="gender" class="form-check-input" id="g1" value="male">
      <label class="form-check-label" for="g1">Male</label>
      <input type="radio" name="gender" class="form-check-input" id="g1" value="female">
      <label class="form-check-label" for="g1">Female</label>
    </div>

    <div class="form-group">  
      <input type="text" class="form-control" id="lang" placeholder="Enter First Spoken Language*" name="lang">
    </div>    

    <div class="form-group">  
      <input class="form-control" id="date" name="date" placeholder="MM/DD/YYY*" type="text"/>
      </div>

    <div class="form-group">  
      <input type="tel" class="form-control" id="contact" placeholder="Enter Contact number*" name="contact">
    </div>

    <div class="form-group">  
      <input type="text" class="form-control" id="nationality" placeholder="Nationality*" name="nationality">
    </div>

     <div class="form-group">  
      <input type="email" class="form-control" id="email" placeholder="Email*" name="email">
    </div>

    <div class="form-group">
      <input type="text" class="form-control" id="caddress" placeholder="Enter Current Address*" name="caddress">
    </div>

    <div class="form-group">
      <input type="text" class="form-control" id="paddress" placeholder="Enter Permanant Address*" name="paddress">
    </div>

    <div class="form-group">
      <input type="text" class="form-control" id="immigration" placeholder="Enter Immigration Status*" name="immigration">
    </div>

    <div class="form-group">
      <input type="text" class="form-control" id="uname" placeholder="Enter User Name" name="uname">
    </div>
    
    <div class="form-group">
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</div>
  </form>
</div>

	</div>
	</div>
	<br><br><br>
<?php
    include '../common/footer.php';
  ?>

</body>
</html>