<?php
session_start();
//connect to database
$db=mysqli_connect("localhost","root","","library") or die('Error connecting.');

if(isset($_POST['submit']))
{
	session_start();
	$firstname=mysql_real_escape_string($_POST['firstname']);
	$lastname=mysql_real_escape_string($_POST['lastname']);
	$email=mysql_real_escape_string($_POST['email']);
	$username=mysql_real_escape_string($_POST['username']);
	$password=mysql_real_escape_string($_POST['password']);
	$password2=mysql_real_escape_string($_POST['password2']);
	$address=mysql_real_escape_string($_POST['address']);
	
	if($password==$password2)
	{
		//create user
		$password=md5($password); //hash password before storing for security purposes
		$sql="INSERT INTO users (firstname,lastname,email,username,password,address) VALUES ('$firstname','$lastname','$email','$username','$password','$address')";
		mysqli_query($db,$sql);
		$_SESSION['message']="You are now logged in.";
		$_SESSION['username']=$username;
		header("location: signup.php"); //redirect to homepage
	}
	else
	{
		//failed
		//$_SESSION['message']="The two passwords don't match.";
		$error = "The two passwords don't match.";
		
	}
}

/*define('DB_HOST', 'localhost');
define('DB_NAME', 'library');
define('DB_USER','root');
define('DB_PASSWORD','');

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());


function NewUser()
{
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password =  $_POST['password'];
	$address =  $_POST['address'];
	$query = "INSERT INTO users (firstname,lastname,username,email,password,address) VALUES ('$firstname','$lastname','$username','$email','$password','$address')";
	$data = mysql_query ($query)or die(mysql_error());
	if($data)
	{
	echo "YOUR REGISTRATION IS COMPLETED...";
	}
}

function SignUp()
{
if(!empty($_POST['username']))   //checking the 'user' name which is from Sign-Up.html, is it empty or have some text
{
	$query = mysql_query("SELECT * FROM users WHERE username = '$_POST[username]' AND password = '$_POST[password]'") or die(mysql_error());

	if(!$row = mysql_fetch_array($query) or die(mysql_error()))
	{
		newuser();
	}
	else
	{
		echo "SORRY...YOU ARE ALREADY REGISTERED ...";
	}
}
}*/

?>


