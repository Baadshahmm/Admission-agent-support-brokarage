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

		$hschool=$_POST['hschool'];
		$ps=$_POST['ps'];
		$field=$_POST['field'];
		$highedu=$_POST['highedu'];
		$dsl=$_POST['dsl'];
		$dpsl=$_POST['dpsl'];
		$ieltsres=$_POST['ieltsres'];
		$uname=$_POST['uname'];
		$id=$_POST['id'];

		$query1 = "INSERT INTO `student_edu`(`id`, `high_school`, `postsecondary`, `field`, `highest_edu`, `school_leaving`, `last_postsecdate`, `ielts`) VALUES ('$id','$hschool','$ps','$field','$highedu','$dsl','$dsl','$ieltsres')";
		$sql1=mysqli_query($con,$query1);

	?>
<br><br><br><br>
<div class="container" style="width:100%;">  
                <h1 align="center">Insert passport Here</h1>  
                <br />  
                <form method="post" action="doc2.php" enctype="multipart/form-data">  
                     <input type="file" name="image" id="image" />
                     <p style="color: #a3a1a0">File size must be less than 64kb if not so <a href="http://compressimage.toolur.com/">Click Here</a></p>  
                     <br />  
                     <input type="hidden" name="id" value="<?php echo $id; ?>">
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