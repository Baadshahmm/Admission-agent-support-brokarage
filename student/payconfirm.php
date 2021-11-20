<?php  
	$uname=$_POST['username'];
	include '../common/connect.php';

	$query1="SELECT * from student_login where username='$uname'";
	$res= mysqli_query($con,$query1);
	if($res){
		$row=mysqli_fetch_assoc($res);
		$id = $row['id'];
		echo $uname;
		echo $id;
// INSERT INTO `payment`(`id`, `usename`, `status`) VALUES ([value-1],[value-2],[value-3])
		$query2 = "INSERT INTO `payment`(`id`,`username`,`status`) VALUES('$id','$uname','payed')";
		$res= mysqli_query($con,$query2);
		if($res){
			echo '<script>alert("Payment Recieved");</script>';
			header("location:index.php");
		}

	}else{
		echo "Invalid User";
	}
?>