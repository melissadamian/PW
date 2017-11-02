<?php   

	$conn = mysqli_connect("localhost", "root", "", "library");  
 
?>  

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
		<title> My Profile </title>
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
			<a href="myprofile.php" class="w3-button w3-bar-item"><span class="glyphicon glyphicon-user"></span>My Profile</a>
			<a href="shopping_cart.php" class="w3-button w3-bar-item"><span class="glyphicon glyphicon-shopping-cart"></span>Shopping Cart</a>
			<a href="myprofile_ro.php" class="w3-button w3-bar-item w3-right">RO</a>
			<a href ="logout.php" class="w3-button w3-bar-item w3-right"><span class="glyphicon glyphicon-log-out"></span>Sign Out</a>
		</nav>
		<!-- Description -->
		<section class="w3-container w3-center w3-content" style="max-width:600px">
		  <h1 class="w3-wide">Atlas Library</h1>
		  <p class="w3-opacity"><i>Welcome to your profile!</i></p>
		</section>
		<div class="container">
			<?php $query = "SELECT * FROM books WHERE username='melissa' "; 
			$result = mysqli_query($conn, $query);
			$row = mysqli_fetch_array($result);
				?>
				<form method="post" action="myprofilee.php">
					<b>First name:</b>
					<input type="text" name="firstname" value="<?php echo $row["firstname"]; ?>">
					<br><br>
					<b>Last name:</b>
					<input type="text" name="lastname" value="<?php echo $row["lastname"]; ?>">
					<br><br>
					<b>Address:</b>
					<input type="text" name="address" value="<?php echo $row["address"]; ?>">
					<br><br>
					<b>Email:</b>
					<input type="email" name="email" value="<?php echo $row["email"]; ?>">
					<br><br>
					<b>Password:</b>
					<input type="password" name="password">
					<br><br>
					<button type="submit" name="submit">Save</button>
				</form>
		</div>
		<script type="text/javascript">
		</script>
	</body>
</html>