<?php 
  require '../common/common.php';
  if(!isset($_SESSION['username'])){
    header("location: ../common/index.php");
  }
 ?>
<!DOCTYPE html>
<html>
<head>
  <title>Univpedia</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

        <style type="text/css">

        body {
          background: #F1F3FA;
        }

        /* Profile container */
        .profile {
          margin: 20px 0;
        }

        /* Profile sidebar */
        .profile-sidebar {
          padding: 20px 0 10px 0;
          background: #fff;
        }

        .profile-userpic img {
          float: none;
          margin: 0 auto;
          width: 50%;
          height: 50%;
          -webkit-border-radius: 50% !important;
          -moz-border-radius: 50% !important;
          border-radius: 50% !important;
        }

        .profile-usertitle {
          text-align: center;
          margin-top: 20px;
        }

        .profile-usertitle-name {
          color: #5a7391;
          font-size: 16px;
          font-weight: 600;
          margin-bottom: 7px;
        }

        .profile-usertitle-job {
          text-transform: uppercase;
          color: #5b9bd1;
          font-size: 12px;
          font-weight: 600;
          margin-bottom: 15px;
        }

        .profile-userbuttons {
          text-align: center;
          margin-top: 10px;
        }

        .profile-userbuttons .btn {
          text-transform: uppercase;
          font-size: 11px;
          font-weight: 600;
          padding: 6px 15px;
          margin-right: 5px;
        }

        .profile-userbuttons .btn:last-child {
          margin-right: 0px;
        }
            
        .profile-usermenu {
          margin-top: 30px;
        }

        .profile-usermenu ul li {
          border-bottom: 1px solid #f0f4f7;
        }

        .profile-usermenu ul li:last-child {
          border-bottom: none;
        }

        .profile-usermenu ul li a {
          color: #93a3b5;
          font-size: 14px;
          font-weight: 400;
        }

        .profile-usermenu ul li a i {
          margin-right: 8px;
          font-size: 14px;
        }

        .profile-usermenu ul li a:hover {
          background-color: #fafcfd;
          color: #5b9bd1;
        }

        .profile-usermenu ul li.active {
          border-bottom: none;
        }

        .profile-usermenu ul li.active a {
          color: #5b9bd1;
          background-color: #f6f9fb;
          border-left: 2px solid #5b9bd1;
          margin-left: -2px;
        }

        /* Profile Content */
        .profile-content {
          padding: 20px;
          background: #fff;
          min-height: 460px;
        }

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
</head>
<body>
  <?php 
    include '../common/header.php';
    include '../common/connect.php';
    $type=$_SESSION['type'];
    if($type=='student'){
      $studid=$_SESSION["id"];
      $query2 = "select * from stud_agent where stud_id='$studid'";
      $sql2 = mysqli_query($con,$query2);
      
    
      if (mysqli_num_rows($sql2)>0) {
        echo "inside rows if";
        $h=mysqli_fetch_assoc($sql2);
        $id=$h['agent_id'];
      }
      else{
        echo '<script>alert("Select agent first")</script>';
        header("location:../student/index.php");
      }

    }else{
      $id=$_SESSION['id'];  
    }



    
    $query = "select * from agent_doc where id='$id'";
    $sql = mysqli_query($con,$query);
    $res = mysqli_fetch_assoc($sql);
    $id1=$res['id'];
    $id2=$id;
    $resume = $res['resume'];

    $query2 = "select * from agent_registration where id='$id'";
    $sql2 = mysqli_query($con,$query2);
    $res2 = mysqli_fetch_assoc($sql2);
    $fname=$res2['fname'];
    $lname=$res2['lname'];
    $email=$res2['email'];
    $contact=$res2['contact'];

   ?>
<div class="container">
        <div class="row profile">
            <div class="col-md-3">
                <div class="profile-sidebar">
                    <!-- SIDEBAR USERPIC -->
                    <div class="profile-userpic">
                        <img src="../../../sprdhfinal/profilepic/patient.jpg" class="img-responsive" alt="">
                    </div>
                    <!-- END SIDEBAR USERPIC -->
                    <!-- SIDEBAR USER TITLE -->
                    <div class="profile-usertitle">
                        <div class="profile-usertitle-name">
                            <?php 
                                echo $fname." ".$lname;
                             ?>
                        </div>
                        <div class="profile-usertitle-job">
                            <?php echo $email."<br>".$contact; ?>
                        </div>
                    </div>
                    <!-- END SIDEBAR USER TITLE -->
                    
                </div>
            </div>
            <div class="col-md-9">
                <div class="profile-content">
                    <strong>Resume</strong>   
                      <?php 
                        echo $id1;
                        echo '<img src="data:image/jpeg;base64,'.base64_encode($resume ).'" height="100%" width="100%" class="img-thumnail">';
                       ?>
                    <strong>Visiting Card</strong>
                    <p>Ye rahul nai upload krra hai..! :(</p>
                </div>
            </div>
        </div>
    </div>
    <?php
  include '../common/footer.php';
?>
</body>
</html>