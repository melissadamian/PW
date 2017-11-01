<?php

?>

<!DOCTYPE html>
<html>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
	<head>
		<style type="text/css">
		</style>
		<link href='contact.css' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<!-- Navigation -->
		<nav class="w3-bar w3-black">
			<a href="home_ro.php" class="w3-button w3-bar-item">Acasă</a>
			<a href="books_ro.php" class="w3-button w3-bar-item">Cărți</a>
			<a href="contact_ro.php" class="w3-button w3-bar-item">Contact</a>
			<a href="signup_ro.php" class="w3-button w3-bar-item">Înregistrare</a>
			<a href="login_ro.php" class="w3-button w3-bar-item">Intră în cont</a>
			<a href="contact.php" class="w3-button w3-bar-item w3-right">EN</a>
		</nav>
		<h1><b>Contact</b></h1>
		<div><b>Pentru detalii suplimentare, ne puteți contacta la:</b></div>
		<ul>
			<li><i>adresa de email:</i> <b>atlaslibrary@gmail.com</b></li>
			<li><i>numărul de telefon:</i> <b>0256 345 213</b></li>
		</ul>
		<div><b>De asemenea, ne puteți trimite un mesaj prin completarea următorului formular:</b></div>
		<form action="mailto:atlaslibrary@gmail.com" method="post" enctype="text/plain">
			<p><b>Prenume:</b><br>
			<input type="text" name="firstname">
			<br>
			<b>Nume:</b><br>
			<input type="text" name="lastname">
			<br>
			<b>Email:</b><br>
			<input type="text" name="email">
			<br>
			<b>Mesaj:</b><br>
			<input type="text" name="message">
			<br><br>
			<input type="submit" value="Trimitere">
			<input type="reset" value="Resetare"></p>
		</form>
	</body>
</html>