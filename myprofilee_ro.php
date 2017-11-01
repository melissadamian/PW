<?php

	define('DB_HOST', 'localhost');
	define('DB_NAME', 'library');
	define('DB_USER','root');
	define('DB_PASSWORD','');

	$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysqli_error($con));
	$db=mysqli_select_db($con,DB_NAME) or die("Failed to connect to MySQL: " . mysqli_error($con));

	//how to include user and pass from loginn.php

	$fname = $_POST['firstname'];
	$lname = $_POST['lastname'];
	$addr = $_POST['address'];
	$mail = $_POST['email'];
	$passw = $_POST['password'];
		
	$data=mysqli_query($con,"SELECT * FROM users where username = '$user' AND password = '$pass'");
	$row=mysqli_fetch_array($data) or die(mysqli_error($con));
	$_SESSION['username']=$row['password'];
	if($data){
		$sql=mysql_query($con,"UPDATE users SET firstname='$fname', lastname='$lname', address='$addr', email='$mail', password='$passw' WHERE username = '$user' AND password = md5('$pass')");
		if(!$sql) 
				die('Could not update data: ' . mysql_error());
	}
?>
