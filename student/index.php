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
    include '../common/header.php';
    include '../common/connect.php';

    if(isset($_POST['submit'])){
      $studid = $_SESSION['id'];
      $agentid = $_POST['agentid'];
      echo "<br><br>";
      echo $studid."std  agent". $agentid;
      $query1 = "select * from stud_agent where stud_id='$studid'";
      $sql1 = mysqli_query($con,$query1);
      $rows = mysqli_num_rows($sql1);
      if ($rows) {
        # code...
        $query1 = "UPDATE stud_agent SET agent_id='$agentid' where stud_id='$studid'";
        $sql1 = mysqli_query($con,$query1);
      }else{

      $query1 = "insert into stud_agent(`stud_id`,`agent_id`) values ('$studid','$agentid')";
      $sql1 = mysqli_query($con,$query1);
}


      if($sql1){
        echo "<script>Agent selected</script>";
      }
    }
  ?>
    <div class="row">
      <div id="banner_image">
        <div class="container" align="center">
          <div class="banner_content">
            <!-- <p style="font-weight: bold; margin-bottom: 30px; font-size: 40px;"></p> -->
            <a href="../student/admission.php" class="btn btn-success btn-lg active" style="padding: 20px; width: 200px;  justify-content: center;">Admission Portal</a>
            <?php 
              
              $uname=$_SESSION['username'];
              $query="SELECT * from payment WHERE username='$uname'";
              $res=mysqli_query($con,$query);
              if (mysqli_num_rows($res)>0) {
                $row=mysqli_fetch_assoc($res);
                $use=$row['username'];
                
                # code...
            ?>

            <a href="agent.php" class="btn btn-success btn-lg active" style="padding: 20px; width: 200px; margin-left: 100px; justify-content: center;">Select Agent</a>

            <?php } 
            else {?>

            <?php } ?>
          </div>
        </div>
      </div>      
    </div>
  
<?php
  include '../common/footer.php';
?>

</body>

</html>