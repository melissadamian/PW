<?php

	session_start(); // Starting Session
	$error=''; // Variable To Store Error Message
	if (isset($_POST['submit'])) {
		if (empty($_POST['username']) || empty($_POST['password']) || empty($_POST['password2'])) {
			$error = "Username and Password are required";
		}
		else {
			// Define $username and $password
			$username=$_POST['username'];
			// Establishing Connection with Server by passing server_name, user_id and password as a parameter
			$connection = mysqli_connect("localhost", "root", "");
			// To protect MySQL injection for Security purpose
			$username = stripslashes($username);
			$username = mysqli_real_escape_string($connection,$username);
			// Selecting Database
			$db = mysqli_select_db($connection,"library");
			// SQL query to fetch information of registerd users and finds user match.
			$query = mysqli_query($connection,"select * from users where username='$username'");
			$rows = mysqli_num_rows($query);
			if ($rows == 0) {
				$firstname = $_POST['firstname'];
				$lastname = $_POST['lastname'];
				$address =  $_POST['address'];
				$email = $_POST['email'];
				$password =  $_POST['password'];
				$password2= $_POST['password2'];
				if($password==$password2){
					$_SESSION['signup_user']=$username; // Initializing Session
					$query = "INSERT INTO users (firstname,lastname,address,email,username,password) VALUES ('$firstname','$lastname','$address','$email','$username','$password')";
					$data = mysqli_query ($connection,$query)or die(mysqli_error($connection));
					if($data)
						header("Location: login.php");
				}
				else{
				$error = "Passwords do not match";
				}					
			} 
			else {
				$error = "Username already exists";
			}
			mysqli_close($connection); // Closing Connection
		}
	}
?>
