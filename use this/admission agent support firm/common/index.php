<?php
	require 'common.php'
?>
<!DOCTYPE html>
<html>
<head>
	<title>Lifestyle Store</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<?php 
		include 'header.php'

	?>
		<div class="row">
			<div id="banner_image">
				<div class="container" align="center">
					<div class="banner_content">
						<p style="font-weight: bold; margin-bottom: 30px; font-size: 40px;">Operate As</p>
						<a href="../student/login.php" class="btn btn-success btn-lg active" style="padding: 20px; width: 200px;  justify-content: center;">Student</a>
						<a href="../agent/login.php" class="btn btn-success btn-lg active" style="padding: 20px; width: 200px; margin-left: 100px; justify-content: center;">Agent</a>
					</div>
				</div>
			</div>			
		</div>
	
<?php
	include 'footer.php';
?>

</body>

</html>