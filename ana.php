<?php
session_start();
//connect to database
$db=mysqli_connect("localhost","root","") or die('Error connecting.');

if(isset($_POST['submit']))
{
	session_start();
	$firstname=mysqli_real_escape_string($_POST['firstname']);
	$lastname=mysqli_real_escape_string($_POST['lastname']);
	$email=mysqli_real_escape_string($_POST['email']);
	$username=mysqli_real_escape_string($_POST['username']);
	$password=mysqli_real_escape_string($_POST['password']);
	$password2=mysqli_real_escape_string($_POST['password2']);
	$address=mysqli_real_escape_string($_POST['address']);
	
	if($password==$password2)
	{
		//create user
		$password=md5($password); //hash password before storing for security purposes
		$sql="INSERT INTO users (firstname,lastname,email,address,username,password) VALUES ('$firstname','$lastname','$email','$address','$username','$password')";
		mysqli_query($db,$sql);
		$_SESSION['message']="You are now logged in.";
		$_SESSION['username']=$username;
		header("location: nou.php"); //redirect to homepage
	}
	else
	{
		//failed
		//$_SESSION['message']="The two passwords don't match.";
		$error = "The two passwords don't match.";
		
	}
}

?>