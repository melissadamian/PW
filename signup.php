<?php

	include('signupp.php'); 
	if(isset($_SESSION['signup_user'])){
		header("location: login.php");
}

?>

<!DOCTYPE html>

<html>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
	<head>
		<title> Sign up </title>
		<style type="text/css">
		</style>
		<link href='signup.css' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<!-- Navigation -->
		<nav class="w3-bar w3-black">
			<a href="home.php" class="w3-button w3-bar-item">Home</a>
			<a href="books.php" class="w3-button w3-bar-item">Books</a>
			<a href="contact.php" class="w3-button w3-bar-item">Contact</a>
			<a href="signup.php" class="w3-button w3-bar-item">Sign up</a>
			<a href="login.php" class="w3-button w3-bar-item">Login</a>
			<a href="signup_ro.php" class="w3-button w3-bar-item w3-right">RO</a>
		</nav>
		<!-- Description -->
		<section class="w3-container w3-center w3-content" style="max-width:600px">
		  <h1 class="w3-wide">Atlas Library</h1>
		  <p class="w3-opacity"><i>Sign up!</i></p>
		</section>
		<form method="post" action="">
			<b>First name:</b><br>
			<input type="text" name="firstname">
			<br>
			<b>Last name:</b><br>
			<input type="text" name="lastname">
			<br>
			<b>Address:</b><br>
			<input type="text" name="address">
			<br>
			<b>Email:</b><br>
			<input type="email" name="email">
			<br>
			<b>Username:</b><br>
			<input type="text" name="username">
			<br>
			<b>Password:</b><br>
			<input type="password" name="password">
			<br>
			<b>Confirm password:</b><br>
			<input type="password" name="password2">
			<br>
		    <button type="submit" name="submit">Sign up</button>
			<br>
			<span><?php echo $error; ?></span>
		</form>
		<script type="text/javascript">
		</script>
	</body>
</html>