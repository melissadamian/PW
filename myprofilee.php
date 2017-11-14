<?php
	// Establishing Connection with Server by passing server_name, user_id and password as a parameter
	$connection = mysqli_connect("localhost", "root", "");
	// Selecting Database
	$db = mysqli_select_db($connection,"library");
	session_start();// Starting Session
	$success='';
	// Storing Session
	$user_check=$_SESSION['login_user'];
	// SQL Query To Fetch Complete Information Of User
	$ses_sql=mysqli_query($connection,"select username from users where username='$user_check'");
	$row = mysqli_fetch_assoc($ses_sql);
	$login_session =$row['username'];
	if(!isset($login_session)){
		mysql_close($connection); // Closing Connection
		header('Location: home_login.php'); // Redirecting To Home Page
	}
	if (isset($_POST['submit'])){
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$address =  $_POST['address'];
		$email = $_POST['email'];
		if(empty($_POST['password']))
			$query = "UPDATE users SET firstname='$firstname',lastname='$lastname',address='$address',email='$email' WHERE username='".$row['username']."'";
		else{	
			$password = $_POST['password'];
			$query = "UPDATE users SET firstname='$firstname',lastname='$lastname',address='$address',email='$email',password='$password' WHERE username='".$row['username']."'";
		}
		$data = mysqli_query ($connection,$query)or die(mysqli_error($connection));
		if($data)
			$success = "Profile successfully updated";
	}

?>
