<?php
	$con =mysqli_connect("localhost","root","","univpedia") or die(mysqli_error($con));
	$username = $_POST['username'];
	$pwd = $_POST['pwd'];

	$result1 = mysqli_query($con,"SELECT * FROM student_login WHERE username = '".$username."'");
    $row=mysqli_fetch_assoc($result1);
    $password=$row['password'];
    $id=$row['id'];
    


    if(($pwd) == $password) 
    { 
    	session_start();
        $_SESSION["logged_in"] = true; 
        $_SESSION["username"] = $username;
        $_SESSION["id"]=$id; 
        $_SESSION["type"]="student"; 
        header("location:index.php");
    }
    else
    {
        echo'The username or password are incorrect!';
    }

?>