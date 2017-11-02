<?php

	define('DB_HOST', 'localhost');
	define('DB_NAME', 'library');
	define('DB_USER','root');
	define('DB_PASSWORD','');

	$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysqli_error($con));
	$db=mysqli_select_db($con,DB_NAME) or die("Failed to connect to MySQL: " . mysqli_error($con));
	
	if(isset($_POST['username']) and isset($_POST['password'])){
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$address =  $_POST['address'];
		$email = $_POST['email'];
		$username = $_POST['username'];
		$password =  $_POST['password'];
		$password2= $_POST['password2'];
	}
	if($password==$password2){
		$query = "INSERT INTO users (firstname,lastname,address,email,username,password) VALUES ('$firstname','$lastname','$address','$email','$username','$password')";
		$data = mysqli_query ($con,$query)or die(mysqli_error($con));
		if($data)
			header("Location: login_ro.php");
	}

?>


