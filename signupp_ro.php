<?php

	session_start(); // Starting Session
	$error=''; // Variable To Store Error Message
	if (isset($_POST['submit'])) {
		if (empty($_POST['username']) || empty($_POST['password'])) {
			$error = "Nume de utilizator și parolă necesare";
		}
		else {
			// Define $username and $password
			$username=$_POST['username'];
			$password=$_POST['password'];
			// Establishing Connection with Server by passing server_name, user_id and password as a parameter
			$connection = mysqli_connect("localhost", "root", "");
			// To protect MySQL injection for Security purpose
			$username = stripslashes($username);
			$password = stripslashes($password);
			$username = mysqli_real_escape_string($connection,$username);
			$password = mysqli_real_escape_string($connection,$password);
			// Selecting Database
			$db = mysqli_select_db($connection,"library");
			// SQL query to fetch information of registerd users and finds user match.
			$query = mysqli_query($connection,"select * from users where username='$username'");
			$rows = mysqli_num_rows($query);
			if ($rows == 0) {
				$_SESSION['signup_user']=$username; // Initializing Session
				$firstname = $_POST['firstname'];
				$lastname = $_POST['lastname'];
				$address =  $_POST['address'];
				$email = $_POST['email'];
				$password =  $_POST['password'];
				$password2= $_POST['password2'];
				if($password==$password2){
					$query = "INSERT INTO users (firstname,lastname,address,email,username,password) VALUES ('$firstname','$lastname','$address','$email','$username','$password')";
					$data = mysqli_query ($con,$query)or die(mysqli_error($con));
					if($data)
						header("Location: login_ro.php");
				}
			} 
			else {
				$error = "Nume de utilizator deja existent";
			}
			mysqli_close($connection); // Closing Connection
		}
	}
?>
