<!DOCTYPE html>
<html>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="script.js"></script>
	
	<head>
		<title> Contact </title>
		<style type="text/css">
		</style>
		<link href='contact.css' rel='stylesheet' type='text/css'>
	</head>
	
	<body>
		<!-- Navigation -->
		<nav class="w3-bar w3-black">
			<a href="home_login.php" class="w3-button w3-bar-item">Home</a>
			<a href="books_login.php" class="w3-button w3-bar-item">Books</a>
			<a href="contact_login.php" class="w3-button w3-bar-item">Contact</a>
			<a href="myprofile.php" class="w3-button w3-bar-item"><span class="glyphicon glyphicon-user"></span>My Profile</a>
			<a href="shopping_cart.php" class="w3-button w3-bar-item"><span class="glyphicon glyphicon-shopping-cart"></span>Shopping Cart</a>
			<a href="contact_login_ro.php" class="w3-button w3-bar-item w3-right">RO</a>
			<a href ="logout.php" class="w3-button w3-bar-item w3-right"><span class="glyphicon glyphicon-log-out"></span>Sign Out</a>
		</nav>
		
		<h1><b>Contact</b></h1>
		<div><b>For any further details, please contact us at the following:</b></div>
		<ul>
			<li><i>email address:</i> <b>atlaslibrary@gmail.com</b></li>
			<li><i>phone number:</i> <b>0256 345 213</b></li>
		</ul>
		<div><b>You can also send us a message here:</b></div>
		<form action="mailto:atlaslibrary@gmail.com" method="post" enctype="text/plain">
			<p><b>First name:</b><br>
			<input type="text" name="firstname">
			<br>
			<b>Last name:</b><br>
			<input type="text" name="lastname">
			<br>
			<b>Email:</b><br>
			<input type="text" name="email">
			<br>
			<b>Message:</b><br>
			<input type="text" name="message">
			<br><br>
			<input type="submit" value="Submit">
			<input type="reset" value="Reset"></p>
		</form>
	</body>
</html>