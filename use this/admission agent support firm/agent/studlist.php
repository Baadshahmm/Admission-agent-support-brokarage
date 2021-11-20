<?php
     include '../common/header.php';
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
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
    <br><br>
  <?php 
    
    include '../common/connect.php';
    $id=$_SESSION['id'];

    $query1 = "select * from stud_agent where agent_id='$id'";
    $sql1 = mysqli_query($con,$query1);

  ?>

<div class="container">
    <div class="row">
      
      <?php 
        $count=1;
        while($res1 = mysqli_fetch_assoc($sql1)){
       ?>
      <div class="col-lg-3">
        <div class="panel panel-info">
          <div class="panel-heading">
            <div class="row">
              <div class="col-xs-6">
                <i class="fa fa-address-card-o fa-5x"></i>
              </div>
              <div class="col-xs-6 text-right">
                <p class="announcement-heading"><?php echo $count; $count++; ?></p>
                <p class="announcement-text"><?php echo $res1['fname']." ".$res1['lname'] ?></p>
                <p class="announcement-text">Id is <?php echo $res1['id']; ?></p>
              </div>
            </div>
          </div>
          <form action="index.php" method="post">
            <div class="panel-footer announcement-bottom">
              <div class="row">
                <input type="hidden" name="studid" value="<?php echo $id; ?>">
                <input type="hidden" name="agentid" value="<?php echo $res1['id']; ?>">
                <input type="submit" name="submit" class="btn btn-primary" value="Select">
                  <i class="fa fa-arrow-circle-right"></i>
                </input>
              </div>
            </div>
          </form>
        </div>
      </div>
      <?php 
        }
       ?>

<?php
  include '../common/footer.php';
?>
</body>
</html>