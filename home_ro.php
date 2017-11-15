<!DOCTYPE html>
<html>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
	
	<head>
		<title> Acasă </title>
		<style type="text/css">
		</style>
		<link href='home.css' rel='stylesheet' type='text/css'>
	</head>
	
	<body>
		<!-- Navigation -->
		<nav class="w3-bar w3-black">
			<a href="home_ro.php" class="w3-button w3-bar-item">Acasă</a>
			<a href="books_ro.php" class="w3-button w3-bar-item">Cărți</a>
			<a href="contact_ro.php" class="w3-button w3-bar-item">Contact</a>
			<a href="signup_ro.php" class="w3-button w3-bar-item">Înregistrare</a>
			<a href="login_ro.php" class="w3-button w3-bar-item">Intră în cont</a>
			<a href="home.php" class="w3-button w3-bar-item w3-right">EN</a>
		</nav>
		
		<!-- Description -->
		<section class="w3-container w3-center w3-content" style="max-width:600px">
		  <h2 class="w3-wide">Librăria Atlas</h2>
		  <p class="w3-opacity"><i>Cumpărați acum!</i></p>
		   <p class="w3-opacity"><i>30% reducere!</i></p>
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