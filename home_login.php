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
		<title> Home </title>
		<style type="text/css">
		</style>
		<link href='home.css' rel='stylesheet' type='text/css'>
	</head>
	
	<body>
		<!-- Navigation -->
		<nav class="w3-bar w3-black">
			<a href="home_login.php" class="w3-button w3-bar-item">Home</a>
			<a href="books_login.php" class="w3-button w3-bar-item">Books</a>
			<a href="contact_login.php" class="w3-button w3-bar-item">Contact</a>
			<a href="myprofile.php" class="w3-button w3-bar-item"><span class="glyphicon glyphicon-user"></span>My Profile</a>
			<a href="shopping_cart.php" class="w3-button w3-bar-item"><span class="glyphicon glyphicon-shopping-cart"></span>Shopping Cart</a>
			<a href="home_login_ro.php" class="w3-button w3-bar-item w3-right">RO</a>
			<a href ="logout.php" class="w3-button w3-bar-item w3-right"><span class="glyphicon glyphicon-log-out"></span>Sign Out</a>
		</nav>
		
		<!-- Description -->
		<section class="w3-container w3-center w3-content" style="max-width:600px">
		  <h2 class="w3-wide">Atlas Library</h2>
		  <p class="w3-opacity"><i>Order now!</i></p>
		   <p class="w3-opacity"><i>30% SALES!</i></p>
		</section>
		
		<!-- Slide Show -->
		<section>
		  <img class="mySlides" src="testamentslide.jpg"
		  style="width:100%">
		  <img class="mySlides" src="originslide3.jpg"
		  style="width:100%">
		  <img class="mySlides" src="bibliaslide.jpg"
		  style="width:100%">
		  <img class="mySlides" src="sarahslide.jpg"
		  style="width:100%">
		  <img class="mySlides" src="booksslide.jpg"
		  style="width:100%">
		</section>
		
		<script type="text/javascript">
			var myIndex = 0;
			carousel();
			function carousel() {
				var i;
				var x = document.getElementsByClassName("mySlides");
				for (i = 0; i < x.length; i++) {
					x[i].style.display = "none";
				}
				myIndex++;
				if (myIndex > x.length) {myIndex = 1}
				x[myIndex-1].style.display = "block";
				setTimeout(carousel, 3000);
			}
		</script>

	</body>
</html>