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
		<title> Contul meu </title>
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
			<a href="myprofile_ro.php" class="w3-button w3-bar-item"><span class="glyphicon glyphicon-user"></span>Contul meu</a>
			<a href="shopping_cart_ro.php" class="w3-button w3-bar-item"><span class="glyphicon glyphicon-shopping-cart"></span>Coș de cumpărături</a>
			<a href="myprofile.php" class="w3-button w3-bar-item w3-right">EN</a>
			<a href ="logout_ro.php" class="w3-button w3-bar-item w3-right"><span class="glyphicon glyphicon-log-out"></span>Ieșire din cont</a>
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
		<script type="text/javascript">
		</script>
	</body>
</html>