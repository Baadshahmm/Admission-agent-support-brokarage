<!DOCTYPE html>
<html>
<head>
  <title>Univpedia</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
            <style type="text/css">

        .user-row {
    margin-bottom: 14px;
}

.user-row:last-child {
    margin-bottom: 0;
}

.dropdown-user {
    margin: 13px 0;
    padding: 5px;
    height: 100%;
}

.dropdown-user:hover {
    cursor: pointer;
}

.table-user-information > tbody > tr {
    border-top: 1px solid rgb(221, 221, 221);
}

.table-user-information > tbody > tr:first-child {
    border-top: 0;
}


.table-user-information > tbody > tr > td {
    border-top: 0;
}


        </style>
<script type="text/javascript" src="profile.js"></script>
</head>
<body>


<br><br>
<div class="container">
  <?php
              include '../common/connect.php';
              include '../common/header.php';
              $id=$_SESSION['id'];
              $query5 = "select * from student_doc where id='$id'";
              $sql5=mysqli_query($con,$query5);
              $res5=mysqli_fetch_assoc($sql5);
              ?>

 <div class="well col-xs-8 col-sm-8 col-md-8 col-lg-8 col-xs-offset-2 col-sm-offset-2 col-md-offset-2 col-lg-offset-2">
        <div class="row user-row">
            
            <div class="col-xs-8 col-sm-9 col-md-10 col-lg-10">
                <strong>Passport</strong><br>
                
            </div>
            <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 dropdown-user" data-for=".cyruxx">
                <i class="glyphicon glyphicon-chevron-down text-muted"></i>
            </div>
        </div>
        <div class="row user-infos cyruxx">
            <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-xs-offset-0 col-sm-offset-0 col-md-offset-1 col-lg-offset-1">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">PassPort</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                                                <?php 
                                                    echo '<img src="data:image/jpeg;base64,'.base64_encode($res5['passport'] ).'" height="100%" width="100%" class="img-thumnail">';
                                                 ?>
                                            </div>
                    </div>
                    <div class="panel-footer">
                        
                    </div>
                </div>
            </div>
        </div>

        <div class="row user-row">
            
            <div class="col-xs-8 col-sm-9 col-md-10 col-lg-10">
                <strong>Transcript</strong><br>
                
            </div>
            <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 dropdown-user" data-for=".tcyruxx">
                <i class="glyphicon glyphicon-chevron-down text-muted"></i>
            </div>
        </div>
        <div class="row user-infos tcyruxx">
            <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-xs-offset-0 col-sm-offset-0 col-md-offset-1 col-lg-offset-1">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Transcript</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                                                <?php 
                                                    echo '<img src="data:image/jpeg;base64,'.base64_encode($res5['transcript1'] ).'" height="100%" width="100%" class="img-thumnail">';
                                                 ?>
                                            </div>
                    </div>
                    <div class="panel-footer">
                        
                    </div>
                </div>
            </div>
        </div>

        <div class="row user-row">
            
            <div class="col-xs-8 col-sm-9 col-md-10 col-lg-10">
                <strong>Birth Certi</strong><br>
                
            </div>
            <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 dropdown-user" data-for=".bcyruxx">
                <i class="glyphicon glyphicon-chevron-down text-muted"></i>
            </div>
        </div>
        <div class="row user-infos bcyruxx">
            <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-xs-offset-0 col-sm-offset-0 col-md-offset-1 col-lg-offset-1">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Birth Certificate</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                                                <?php 
                                                    echo '<img src="data:image/jpeg;base64,'.base64_encode($res5['birth_certi'] ).'" height="100%" width="100%" class="img-thumnail">';
                                                 ?>
                                            </div>
                    </div>
                    <div class="panel-footer">
                        
                    </div>
                </div>
            </div>
        </div>
                


                <div class="row user-row">
            
            <div class="col-xs-8 col-sm-9 col-md-10 col-lg-10">
                <strong>Visa Status</strong><br>
                
            </div>
            <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 dropdown-user" data-for=".cyruxx">
                <i class="glyphicon glyphicon-chevron-down text-muted"></i>
            </div>
        </div>
        <div class="row user-infos cyruxx">
            <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-xs-offset-0 col-sm-offset-0 col-md-offset-1 col-lg-offset-1">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Visa Status</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                                                <?php 
                                                    echo '<img src="data:image/jpeg;base64,'.base64_encode($res5['visa_status'] ).'" height="100%" width="100%" class="img-thumnail">';
                                                 ?>
                                            </div>
                    </div>
                    <div class="panel-footer">
                        
                    </div>
                </div>
            </div>
        </div>



        <div class="row user-row">
            
            <div class="col-xs-8 col-sm-9 col-md-10 col-lg-10">
                <strong>Income Certificate</strong><br>
                
            </div>
            <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 dropdown-user" data-for=".cyruxx">
                <i class="glyphicon glyphicon-chevron-down text-muted"></i>
            </div>
        </div>
        <div class="row user-infos cyruxx">
            <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-xs-offset-0 col-sm-offset-0 col-md-offset-1 col-lg-offset-1">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Income Certificate</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                                                <?php 
                                                    echo '<img src="data:image/jpeg;base64,'.base64_encode($res5['family_wealth'] ).'" height="100%" width="100%" class="img-thumnail">';
                                                 ?>
                                            </div>
                    </div>
                    <div class="panel-footer">
                        
                    </div>
                </div>
            </div>
        </div>



        <div class="row user-row">
            
            <div class="col-xs-8 col-sm-9 col-md-10 col-lg-10">
                <strong>IELTS Result</strong><br>
                
            </div>
            <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 dropdown-user" data-for=".cyruxx">
                <i class="glyphicon glyphicon-chevron-down text-muted"></i>
            </div>
        </div>
        <div class="row user-infos cyruxx">
            <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-xs-offset-0 col-sm-offset-0 col-md-offset-1 col-lg-offset-1">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">IELTS Result</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                                                <?php 
                                                    echo '<img src="data:image/jpeg;base64,'.base64_encode($res5['ielts'] ).'" height="100%" width="100%" class="img-thumnail">';
                                                 ?>
                                            </div>
                    </div>
                    <div class="panel-footer">
                        
                    </div>
                </div>
            </div>
        </div>



        <div class="row user-row">
            
            <div class="col-xs-8 col-sm-9 col-md-10 col-lg-10">
                <strong>Resume</strong><br>
                
            </div>
            <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 dropdown-user" data-for=".cyruxx">
                <i class="glyphicon glyphicon-chevron-down text-muted"></i>
            </div>
        </div>
        <div class="row user-infos cyruxx">
            <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-xs-offset-0 col-sm-offset-0 col-md-offset-1 col-lg-offset-1">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Resume</h3>
                    </div>
                    <div class="panel-body">
                        <div class="row">
                                                <?php 
                                                    echo '<img src="data:image/jpeg;base64,'.base64_encode($res5['resume'] ).'" height="100%" width="100%" class="img-thumnail">';
                                                 ?>
                                            </div>
                    </div>
                    <div class="panel-footer">
                        
                    </div>
                </div>
            </div>
        </div>





        
        
    </div>
</div>

	<!-- <div class="container">
						<?php
							include '../common/connect.php';
						 	include '../common/header.php';
						 	?>
							
						 	<br><br><br><br><br>
							<?php
							
							$id=$_SESSION['id'];
							echo $id;
							$query5 = "select * from student_doc where id='$id'";
  	                        $sql5=mysqli_query($con,$query5);
  	                         while($res5=mysqli_fetch_assoc($sql5)){
                        ?>
                               <div class="row user-row">
                                <div class="col-xs-8 col-sm-9 col-md-10 col-lg-10">
                                  <strong>Passport</strong>
                                </div>
                                <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 dropdown-user" data-for=".passsport">
                                  <i class="glyphicon glyphicon-chevron-down text-muted"></i>
                              	</div>
                              </div>
                              <div class="row user-infos passport">
                                <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 col-xs-offset-0 col-sm-offset-0 col-md-offset-1 col-lg-offset-1">
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                            <h3 class="panel-title">Passport</h3>
                                        </div>
                                        <div class="panel-body">
                                            <div class="row">
                                                <?php 
                                                    echo '<img src="data:image/jpeg;base64,'.base64_encode(   $res5['passport'] ).'" height="100%" width="100%" class="img-thumnail">';
                                                 ?>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <?php
                          }
                        ?>
                            </div>
       <?php include '../common/footer.php'; ?>                     
   </div> -->

<script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script> 
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/wow.min.js"></script>

    <script>
          new WOW().init();
        </script>
 </body>
</html>