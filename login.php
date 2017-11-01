<!DOCTYPE html>
<html>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
	<head>
		<style type="text/css">
		</style>
		<link href='login.css' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<!-- Navigation -->
		<nav class="w3-bar w3-black">
			<a href="home.php" class="w3-button w3-bar-item">Home</a>
			<a href="books.php" class="w3-button w3-bar-item">Books</a>
			<a href="contact.php" class="w3-button w3-bar-item">Contact</a>
			<a href="signup.php" class="w3-button w3-bar-item">Sign up</a>
			<a href="login.php" class="w3-button w3-bar-item">Login</a>
			<a href="login_ro.php" class="w3-button w3-bar-item w3-right">RO</a>
		</nav>
		<!-- Description -->
		<section class="w3-container w3-center w3-content" style="max-width:600px">
		  <h2 class="w3-wide">Atlas Library</h2>
		  <p class="w3-opacity"><i>Order now!</i></p>
		  <p class="w3-opacity"><i>30% SALES!</i></p>
		</section>
		<form method="post" action="loginn.php">
			<b>Username:</b><br>
			<input type="text" name="username">
			<br>
			<b>Password:</b><br>
			<input type="password" name="password">
			<br><br>
			<input type="checkbox" checked="checked"><i>Remember me</i>
			<br><br>
		    <button type="submit">Login</button>
		</form>
		<script type="text/javascript">
		</script>
	</body>
</html>