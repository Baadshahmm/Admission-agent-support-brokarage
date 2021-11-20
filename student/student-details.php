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
	<?php 
		include '../common/header.php';
		include("../common/connect.php");

		$fname=$_POST['fname'];
		$mname=$_POST['mname'];
		$lname=$_POST['lname'];
		$flname=$_POST['flname'];
		$prefname=$_POST['prefname'];
		$gender=$_POST['gender'];
		$lang=$_POST['lang'];
		$date=$_POST['date'];
		$contact=$_POST['contact'];
		$nationality=$_POST['nationality'];
		$email=$_POST['email'];
		$caddress=$_POST['caddress'];
		$paddress=$_POST['paddress'];
		$immigration=$_POST['immigration'];
		$uname=$_POST['uname'];
		$pwd=$_POST['pwd'];
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

echo '<br>';echo '<br>';
echo '<br>';
echo '<br>';
echo '<br>';

echo '<br>';echo '<br>';
echo '<br>';
		echo "now";

		$query1 = "INSERT INTO `student_registration`(`first_name`, `middle_name`, `family_name`, `last_name`, `pref_first`, `gender`, `lang`, `dob`, `contact_details`, `nationality`, `current_add`, `permanent_add`, `immigration status`) VALUES ('$fname','$mname','$lname','$flname','$prefname','$gender','$lang','$date','$contact','$nationality','$caddress','$paddress','$immigration')";
		$sql1=mysqli_query($con,$query1);

		$query2="select id from student_registration where contact_details='$contact'";
		$sql2=mysqli_query($con,$query2);
		$res2=mysqli_fetch_assoc($sql2);
		$id=$res2['id'];
		echo $id;

		$query3="INSERT INTO student_login(`id`,`username`,`password`,`email`) VALUES ('$id','$uname','$pwd','$email')";

		$sql3=mysqli_query($con,$query3);
		echo "here";
	?>
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
<form method="POST" action="student_docs.php">
  	
    <div class="form-group">
      <input type="text" class="form-control" id="hschool" placeholder="Name of High School*" name="hschool">
    </div>
    
    <div class="form-group">  
      <input type="text" class="form-control" id="ps" placeholder="Enter name of Post Secondary(optional)" name="ps">
    </div>

    <div class="form-group">  
      <input type="text" class="form-control" id="field" placeholder="Enter your field of study*" name="field">
    </div>

    <div class="form-group">  
      <input type="text" class="form-control" id="highedu" placeholder="Enter your Highest Education" name="highedu">
    </div>

    <div class="form-group">  
      <input type="text" class="form-control" id="dsl" placeholder="Date of school leaving*" name="dsl">
    </div>

    <div class="form-group">  
      <input type="text" class="form-control" id="dpsl" placeholder="Date of Post Secondary leaving(optional)" name="dpsl">
    </div>

    <div class="form-group">  
      <input type="text" class="form-control" id="ieltsres" placeholder="Enter IELTS result Marks*" name="ieltsres">
    </div>  

    <input type="hidden" name="uname" value="<?php echo $uname; ?>">
    <input type="hidden" name="id" value="<?php echo $id; ?>">  


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