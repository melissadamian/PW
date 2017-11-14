<?php

	include('loginn_ro.php'); 
	if(isset($_SESSION['login_user'])){
		header("location: myprofile_ro.php");
}

?>

<!DOCTYPE html>
<html>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
	<head>
		<title> Intră în cont </title>
		<style type="text/css">
		</style>
		<link href='login.css' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<!-- Navigation -->
		<nav class="w3-bar w3-black">
			<a href="home_ro.php" class="w3-button w3-bar-item">Acasă</a>
			<a href="books_ro.php" class="w3-button w3-bar-item">Cărți</a>
			<a href="contact_ro.php" class="w3-button w3-bar-item">Contact</a>
			<a href="signup_ro.php" class="w3-button w3-bar-item">Înregistrare</a>
			<a href="login_ro.php" class="w3-button w3-bar-item">Intră în cont</a>
			<a href="login.php" class="w3-button w3-bar-item w3-right">EN</a>
		</nav>
		<!-- Description -->
		<section class="w3-container w3-center w3-content" style="max-width:600px">
		  <h2 class="w3-wide">Librăria Atlas</h2>
		  <p class="w3-opacity"><i>Cumpărați acum!</i></p>
		   <p class="w3-opacity"><i>30% reducere!</i></p>
		</section>
		<form method="post" action="">
			<b>Nume de utilizator:</b><br>
			<input id="username "type="text" name="username">
			<br>
			<b>Parolă:</b><br>
			<input id="password" type="password" name="password">
			<br><br>
			<input type="checkbox" checked="checked"><i>Ține-mă minte!</i>
			<br><br>
		    <input type="submit" name="submit" value="Intră în cont"></i>
			<p><?php echo $error; ?></p>
		</form>
		<script type="text/javascript">
		</script>
	</body>
</html>