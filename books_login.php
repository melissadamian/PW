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
		<title> Books </title>
		<style type="text/css">
		</style>
		<link href='books.css' rel='stylesheet' type='text/css'>
	</head>

	<body>
		<!-- Navigation -->
		<nav class="w3-bar w3-black">
			<a href="home_login.php" class="w3-button w3-bar-item">Home</a>
			<a href="books_login.php" class="w3-button w3-bar-item">Books</a>
			<a href="contact_login.php" class="w3-button w3-bar-item">Contact</a>
			<a href="myprofile.php" class="w3-button w3-bar-item"><span class="glyphicon glyphicon-user"></span>My Profile</a>
			<a href="shopping_cart.php" class="w3-button w3-bar-item"><span class="glyphicon glyphicon-shopping-cart"></span>Shopping Cart</a>
			<a href="books_login_ro.php" class="w3-button w3-bar-item w3-right">RO</a>
			<a href ="logout.php" class="w3-button w3-bar-item w3-right"><span class="glyphicon glyphicon-log-out"></span>Sign Out</a>
		</nav>
		<br><br>
		<div class="container">
				<div class="row">
					<div class="col-sm-6 col-sm-offset-3">
						<div id="imaginary_container"> 
							<div class="input-group stylish-input-group">
								<input id="searchTerms" type="text" class="form-control"  placeholder="Search" >
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
					$query.=" WHERE title LIKE '%$search%' OR author LIKE '%$search%'"; 
				}
				else
					$query.=" "; 
				
				$query.="  ORDER BY title ASC";
                $result = mysqli_query($connect, $query);  
                if(mysqli_num_rows($result) > 0)  
                {  
						$i=0;
						while($row = mysqli_fetch_array($result))  
						{  
							$i++;
							?>  
							
							<div class="col-md-4">  
								 <form method="post" action="shopping_cart.php?action=add&id=<?php echo $row["bookID"]; ?>">  
									  <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">  
										   <a href="#myModal<?php echo $i?>" role="button" data-toggle="modal"> <img id="myImg" img src="<?php echo $row['photo']; ?>" class="img-responsive" /><br /></a>
										   <a href="#myModal<?php echo $i?>" data-toggle="modal" data-target="#myModal<?php echo $i?>"><h4 class="text-info"><?php echo $row["title"]; ?></h4> </a>
										   <h4 class="text-info"><?php echo $row["author"]; ?></h4> 
										   <!--<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">About</button>-->
										   <h4 class="text-danger"><?php echo $row["price"]; ?> lei</h4>  
										   <input type="text" name="quantity" class="form-control" value="1" />  
										   <input type="hidden" name="hidden_title" value="<?php echo $row["title"]; ?>" />
										   <input type="hidden" name="hidden_author" value="<?php echo $row["author"]; ?>" />								   
										   <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />  
										   <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />  
									  </div>  
								 </form>
									<div class="container">			 
								  <!-- Modal -->
								  <div class="modal fade" id="myModal<?php echo $i?>" role="dialog">
									<div class="modal-dialog">
									
									  <!-- Modal content-->
									  <div class="modal-content">
										<div class="modal-header">
										  <button type="button" class="close" data-dismiss="modal">&times;</button>
										  <h4 class="modal-title"><?php echo $row["title"]; ?> by <?php echo $row["author"]; ?></h4>
										</div>
										<div class="modal-body">
										  <p><?php echo $row["info"]; ?></p>
										</div>
										<div class="modal-footer">
										  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
										</div>
									  </div>
									  
									</div>
								  </div>
								  
								</div>
							</div> 

							<?php 
							 
						}  
                }  
                ?>  
                
               
           </div>  
		   
    </body>  
</html>