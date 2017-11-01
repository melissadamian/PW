<?php   

	$connect = mysqli_connect("localhost", "root", "", "library");  
 
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
		<style type="text/css">
		</style>
		<link href='books.css' rel='stylesheet' type='text/css'>
	</head>
	
	<style>

		.stylish-input-group .input-group-addon{
			background: white !important; 
		}
		.stylish-input-group .form-control{
			border-right:0; 
			box-shadow:0 0 0; 
			border-color:#ccc;
		}
		.stylish-input-group button{
			border:0;
			background:transparent;
		}
	</style>
	
	<body>
		<!-- Navigation -->
		<nav class="w3-bar w3-black">
			<a href="home_login_ro.php" class="w3-button w3-bar-item">Acasă</a>
			<a href="books_login_ro.php" class="w3-button w3-bar-item">Cărți</a>
			<a href="contact_login_ro.php" class="w3-button w3-bar-item">Contact</a>
			<a href="signup_login_ro.php" class="w3-button w3-bar-item">Înregistrare</a>
			<a href="myprofile_ro.php" class="w3-button w3-bar-item">Contul meu</a>
			<a href="books_login.php" class="w3-button w3-bar-item w3-right">EN</a>
		</nav>
		<br><br>
		<div class="container">
				<div class="row">
					<div class="col-sm-6 col-sm-offset-3">
						<div id="imaginary_container"> 
							<div class="input-group stylish-input-group">
								<input id="searchTerms" type="text" class="form-control"  placeholder="Caută" >
								<span class="input-group-addon">
									<button id="submitSearch" type="submit">
										<span class="glyphicon glyphicon-search"></span>
									</button>  
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			
		 <br />  
		 
           <div class="container-fluid " style="width:700px;">  
                <h3 align="center" class="text-danger"></h3><br />  
                <?php 
				$search = isset($_GET['search'])?mysqli_real_escape_string($connect,$_GET['search']):false;
                $query = "SELECT * FROM books";  
				if($search){
					$query.=" WHERE title LIKE '%$search%'"; 
				}
				else
					$query.=" "; 
				
				$query.="  ORDER BY title ASC";
                $result = mysqli_query($connect, $query);  
				$i=0;
                if(mysqli_num_rows($result) > 0)  
                {  
						 while($row = mysqli_fetch_array($result))  
						 {  
							if($i==4)
							{
								echo $i;
								?>
								<br><br><p>dsfsd</p>
								<?php
								$i=0;
							}
							else
								$i++;
					?>  
					
					<div class="col-md-4">  
						 <form method="post" action="cart.php?action=add&id=<?php echo $row["bookID"]; ?>">  
							  <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">  
								   <img id="myImg" img src="<?php echo $row['photo']; ?>" class="img-responsive" /><br />
								   <h4 class="text-info"><?php echo $row["title"]; ?></h4> 
								   <h4 class="text-info"><?php echo $row["author"]; ?></h4> 
								   <h4 class="text-danger"><?php echo $row["price"]; ?> lei</h4>  
								   <input type="text" name="quantity" class="form-control" value="1" />  
								   <input type="hidden" name="hidden_title" value="<?php echo $row["title"]; ?>" />
								   <input type="hidden" name="hidden_author" value="<?php echo $row["author"]; ?>" />								   
								   <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />  
								   <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Adaugă în coș" />  
							  </div>  
						 </form>  
					</div>  
					<?php 
							 
						 }  
                }  
                ?>  
                
               
           </div>  
           <br />  
		   
	
	<!DOCTYPE html>
	<html>
		<head>
			<style>
				#myImg {
					border-radius: 5px;
					cursor: pointer;
					transition: 0.3s;
				}

				#myImg:hover {opacity: 0.7;}

				/* The Modal (background) */
				.modal {
					display: none; /* Hidden by default */
					position: fixed; /* Stay in place */
					z-index: 1; /* Sit on top */
					padding-top: 100px; /* Location of the box */
					left: 0;
					top: 0;
					width: 100%; /* Full width */
					height: 100%; /* Full height */
					overflow: auto; /* Enable scroll if needed */
					background-color: rgb(0,0,0); /* Fallback color */
					background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
				}

				/* Modal Content (image) */
				.modal-content {
					margin: auto;
					display: block;
					width: 80%;
					max-width: 700px;
				}

				/* Caption of Modal Image */
				#caption {
					margin: auto;
					display: block;
					width: 80%;
					max-width: 700px;
					text-align: center;
					color: #ccc;
					padding: 10px 0;
					height: 150px;
				}

				/* Add Animation */
				.modal-content, #caption {    
					-webkit-animation-name: zoom;
					-webkit-animation-duration: 0.6s;
					animation-name: zoom;
					animation-duration: 0.6s;
				}

				@-webkit-keyframes zoom {
					from {-webkit-transform:scale(0)} 
					to {-webkit-transform:scale(1)}
				}

				@keyframes zoom {
					from {transform:scale(0)} 
					to {transform:scale(1)}
				}

				/* The Close Button */
				.close {
					position: absolute;
					top: 15px;
					right: 35px;
					color: #f1f1f1;
					font-size: 40px;
					font-weight: bold;
					transition: 0.3s;
				}

				.close:hover,
				.close:focus {
					color: #bbb;
					text-decoration: none;
					cursor: pointer;
				}

				/* 100% Image Width on Smaller Screens */
				@media only screen and (max-width: 700px){
					.modal-content {
						width: 100%;
					}
				}
			</style>
		</head>
		
		<body>

			<!-- The Modal -->
			<div id="myModal" class="modal">
			  <span class="close">&times;</span>
			  <img class="modal-content" id="img01">
			  <div id="caption"></div>
			</div>

			<script>
				// Get the modal
				var modal = document.getElementById('myModal');

				// Get the image and insert it inside the modal - use its "alt" text as a caption
				var img = document.getElementById('myImg');
				var modalImg = document.getElementById("img01");
				var captionText = document.getElementById("caption");
				img.onclick = function(){
					modal.style.display = "block";
					modalImg.src = this.src;
					captionText.innerHTML = this.alt;
				}

				// Get the <span> element that closes the modal
				var span = document.getElementsByClassName("close")[0];

				// When the user clicks on <span> (x), close the modal
				span.onclick = function() { 
					modal.style.display = "none";
				}
			</script>
		</body>
	</html>

		   
		   
		   
    </body>  
</html>