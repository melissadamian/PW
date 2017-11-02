<!DOCTYPE html>

<html>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
	<head>
		<title> Înregistrare </title>
		<style type="text/css">
		</style>
		<link href='signup.css' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<!-- Navigation -->
		<nav class="w3-bar w3-black">
			<a href="home_ro.php" class="w3-button w3-bar-item">Acasă</a>
			<a href="books_ro.php" class="w3-button w3-bar-item">Cărți</a>
			<a href="contact_ro.php" class="w3-button w3-bar-item">Contact</a>
			<a href="signup_ro.php" class="w3-button w3-bar-item">Înregistrare</a>
			<a href="login_ro.php" class="w3-button w3-bar-item">Intră în cont</a>
			<a href="signup.php" class="w3-button w3-bar-item w3-right">EN</a>
		</nav>
		<!-- Description -->
		<section class="w3-container w3-center w3-content" style="max-width:600px">
		  <h1 class="w3-wide">Librăria Atlas</h1>
		  <p class="w3-opacity"><i>Înregistrează-te acum!</i></p>
		</section>
		<form method="post" action="signupp_ro.php">
			<b>Prenume:</b><br>
			<input type="text" name="firstname">
			<br>
			<b>Nume:</b><br>
			<input type="text" name="lastname">
			<br>
			<b>Adresă:</b><br>
			<input type="text" name="address">
			<br>
			<b>Email:</b><br>
			<input type="email" name="email">
			<br>
			<b>Nume utilizator:</b><br>
			<input type="text" name="username">
			<br>
			<b>Parolă:</b><br>
			<input type="password" name="password">
			<br>
			<b>Confirmă parola:</b><br>
			<input type="password" name="password2">
			<br><br>
		    <button type="submit" name="submit">Înregistrare</button>
		</form>
		<script type="text/javascript">
		</script>
	</body>
</html>