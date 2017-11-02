<?php

	define('DB_HOST', 'localhost');
	define('DB_NAME', 'library');
	define('DB_USER','root');
	define('DB_PASSWORD','');

	$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysqli_error($con));
	$db=mysqli_select_db($con,DB_NAME) or die("Failed to connect to MySQL: " . mysqli_error($con));

	$user = $_POST['username'];
	$pass = $_POST['password'];
		
	$data=mysqli_query($con,"SELECT * FROM users where username = '$user' AND password = '$pass'");
	$row=mysqli_fetch_array($data) or die(mysqli_error($con));
	$_SESSION['username']=$row['password'];
	if($data)
			header("Location: myprofile_ro.php");
	else 
			echo "Username or password incorrect!";

?>