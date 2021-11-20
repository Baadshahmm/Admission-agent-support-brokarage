<?php 
	session_start();
 ?>

<div class="navbar navbar-inverse navbar-fixed-top">
<div class="container">
<div class="navbar-header">
<button type="button" class="navbar-toggle" data-toggle="collapse" datatarget="#myNavbar">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span> 
</button>
<a class="navbar-brand" href="index.php">UNIPEDIA</a>
</div>
<div class="collapse navbar-collapse" id="myNavbar">
<ul class="nav navbar-nav navbar-right">
<?php

if (isset($_SESSION['username'])) {
	$uname=$_SESSION['username'];
?>
<li><a href = "../<?php echo $_SESSION['type'] ?>/index.php"><span class = "glyphicon glyphicon-shoppingcart"></span> <?php echo $uname; ?> </a></li>
<li><a href = "../agent/profile.php"><span class = "glyphicon glyphicon-shoppingcart"></span> Agent </a></li>
<li><a href = "university.php"><span class = "glyphicon glyphicon-user"></span> 
University</a></li>
<li><a href = "../common/logout.php"><span class = "glyphicon glyphicon-login"></span> Logout</a></li>
?>
<?php 
} else {
?>
<?php
}
?>
</ul>
</div>
</div>
</div>	