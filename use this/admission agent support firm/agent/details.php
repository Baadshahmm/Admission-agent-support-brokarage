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
 $connect = mysqli_connect("localhost", "root", "", "univpedia");  
      $id=$_POST['id'];
      $uname=$_POST['uname'];
   
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "INSERT INTO agent_doc(`id`,`resume`) VALUES ('$id','$file')";  
      if(mysqli_query($connect, $query))  
      {  
           echo '<script>alert("Resume Inserted into Database")</script>';  
      }  
   
 ?>  
<br><br><br><br>
<div class="container" style="width:100%;">  
                <h1 align="center">Insert details Here</h1>  
                <br />  
                  <form method="POST" action="final.php">

                      <div class="form-group">
                       <input type="text" class="form-control"  placeholder="licencenum" name="licencenum">
                      </div>

                      <div class="form-group">    
                        <input type="text" class="form-control" placeholder="Experience in years" name="experience">
                      </div>
                      <input type="hidden" name="id" value="<?php echo $id; ?>"> 
                     <input type="hidden" name="uname" value="<?php echo $uname; ?>"> 
                     


                     <div class="form-group">
                      <input class="btn btn-primary" type="submit" id="register" name="register" value="Register" style="width: 150px;">
                    </div>


      
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