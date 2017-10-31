<!DOCTYPE html>

<html>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
	<head>
		<style type="text/css">
		</style>
		<link href='myprofile.css' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<!-- Navigation -->
		<nav class="w3-bar w3-black">
			<a href="home_login.php" class="w3-button w3-bar-item">Home</a>
			<a href="books_login.php" class="w3-button w3-bar-item">Books</a>
			<a href="contact_login.php" class="w3-button w3-bar-item">Contact</a>
			<a href="signup_login.php" class="w3-button w3-bar-item">Sign up</a>
			<a href="myprofile.php" class="w3-button w3-bar-item">My Profile</a>
		</nav>
		<!-- Description -->
		<section class="w3-container w3-center w3-content" style="max-width:600px">
		  <h1 class="w3-wide">Atlas Library</h1>
		  <p class="w3-opacity"><i>Welcome to your profile!</i></p>
		</section>
		<form method="post" action="myprofilee.php">
			<b>First name:</b>
			<input type="text" name="firstname">
			<br><br>
			<b>Last name:</b>
			<input type="text" name="lastname">
			<br><br>
			<b>Address:</b>
			<input type="text" name="address">
			<br><br>
			<b>Email:</b>
			<input type="email" name="email">
			<br><br>
			<b>Password:</b>
			<input type="password" name="password">
			<br><br>
		    <button type="submit" name="submit">Save</button>
		</form>
		<h2><a href = "logout.php">Sign Out</a></h2>
		<script type="text/javascript">
		</script>
	</body>
</html>