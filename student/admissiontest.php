<!DOCTYPE html>
<html>
<head>
  <title>Univpedia</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
     <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
<script type="text/javascript" src="js/profile.js"></script>
</head>
<body>
	<div class="containern">
						<?php
							include '../common/connect.php';
							// 	include '../common/header.php';
							
							session_start();
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
   </div>

<script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script> 
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="js/wow.min.js"></script>

    <script>
          new WOW().init();
        </script>
         <script type="text/javascript">$(function() {
      $('a[href*=#]:not([href=#])').click(function() {
        if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
          if (target.length) {
            $('html,body').animate({
              scrollTop: target.offset().top
            }, 1000);
            return false;
          }
        }
      });
    });
    </script>
 </body>
</html>