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
</head>
<body>
  <?php 
    include '../common/header.php'
  ?>
    <div class="row">
      <div id="banner_image">
        <div class="container" align="center">
          <div class="banner_content">
            <!-- <p style="font-weight: bold; margin-bottom: 30px; font-size: 40px;"></p> -->
            <a href="profile.php" class="btn btn-success btn-lg active" style="padding: 20px; width: 200px;  justify-content: center;">Profile</a>
            <a href="studlist.php" class="btn btn-success btn-lg active" style="padding: 20px; width: 200px; margin-left: 100px; justify-content: center;">Student List</a>
          </div>
        </div>
      </div>      
    </div>
  
<?php
  include '../common/footer.php';
?>

</body>

</html>