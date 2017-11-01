<!DOCTYPE html>

<html>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
	<head>
		<style type="text/css">
		</style>
		<link href='myprofile_ro.css' rel='stylesheet' type='text/css'>
	</head>
	<body>
		<!-- Navigation -->
		<nav class="w3-bar w3-black">
			<a href="home_login_ro.php" class="w3-button w3-bar-item">Acasă</a>
			<a href="books_login_ro.php" class="w3-button w3-bar-item">Cărți</a>
			<a href="contact_login_ro.php" class="w3-button w3-bar-item">Contact</a>
			<a href="signup_login_ro.php" class="w3-button w3-bar-item">Înregistrare</a>
			<a href="myprofile_ro.php" class="w3-button w3-bar-item">Contul meu</a>
			<a href="myprofile.php" class="w3-button w3-bar-item w3-right">EN</a>
		</nav>
		<!-- Description -->
		<section class="w3-container w3-center w3-content" style="max-width:600px">
		  <h1 class="w3-wide">Librăria Atlas</h1>
		  <p class="w3-opacity"><i>Bun venit!</i></p>
		</section>
		<form method="post" action="myprofilee_ro.php">
			<b>Prenume:</b>
			<input type="text" name="firstname">
			<br><br>
			<b>Nume:</b>
			<input type="text" name="lastname">
			<br><br>
			<b>Adresă:</b>
			<input type="text" name="address">
			<br><br>
			<b>Email:</b>
			<input type="email" name="email">
			<br><br>
			<b>Parolă:</b>
			<input type="password" name="password">
			<br><br>
		    <button type="submit" name="submit">Salvare</button>
		</form>
		<h2><a href = "logout_ro.php">Ieșire din cont</a></h2>
		<script type="text/javascript">
		</script>
	</body>
</html>