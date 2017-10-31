<!DOCTYPE html>
<html>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
	
	<head>
		<style type="text/css">
		</style>
		<link href='home.css' rel='stylesheet' type='text/css'>
	</head>
	
	<body>
		<!-- Navigation -->
		<nav class="w3-bar w3-black">
			<a href="home.php" class="w3-button w3-bar-item">Home</a>
			<a href="books.php" class="w3-button w3-bar-item">Books</a>
			<a href="contact.php" class="w3-button w3-bar-item">Contact</a>
			<a href="signup.php" class="w3-button w3-bar-item">Sign up</a>
			<a href="login.php" class="w3-button w3-bar-item">Login</a>
		</nav>
		
		<!-- Description -->
		<section class="w3-container w3-center w3-content" style="max-width:600px">
		  <h2 class="w3-wide">Atlas Library</h2>
		  <p class="w3-opacity"><i>Order now!</i></p>
		   <p class="w3-opacity"><i>30% SALES!</i></p>
		</section>
		
		<!-- Slide Show -->
		<section>
		  <img class="mySlides" src="img1.jpg"
		  style="width:100%">
		  <img class="mySlides" src="img2.jpg"
		  style="width:100%">
		  <img class="mySlides" src="img3.jpg"
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