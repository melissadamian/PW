<?php   
 session_start();
 $connect = mysqli_connect("localhost", "root", "", "library");  
 if(isset($_POST["add_to_cart"]))  
 {  
      if(isset($_SESSION["shopping_cart"]))  
      {  
           $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");  
           if(!in_array($_GET["id"], $item_array_id))  //daca pun bookID si ma loghez, adaug o carte, mai adaug una, imi zice ca e deja, ma delogheaza si cand ma reloghez e pastrata prima in cart
           {  
				$query = "SELECT * FROM books WHERE bookID='".$_GET["id"]."' "; 
				$result = mysqli_query($connect, $query);
				$row = mysqli_fetch_array($result);
				if($row["amount"]>=$_POST["quantity"])
				{
					$count = count($_SESSION["shopping_cart"]);  
					$item_array = array(  
						 'item_id'               =>     $_GET["id"],  
						 'item_title'               =>     $_POST["hidden_title"],  
						 'item_price'          =>     $_POST["hidden_price"],  
						 'item_quantity'          =>     $_POST["quantity"]  
					);  
					
					$new_quantity=$row["amount"]-$_POST["quantity"];
					$query = "UPDATE books SET amount='$new_quantity' WHERE title='".$row['title']."' ";
					$data = mysqli_query ($connect,$query)or die(mysqli_error($connect));
					$_SESSION["shopping_cart"][$count] = $item_array;
					echo '<script>window.location="shopping_cart.php"</script>';	
				}
				else
				{
					echo '<script>alert("Only '.$row["amount"].' left!")</script>';  
					echo '<script>window.location="books_login.php"</script>'; 
				}
           }  
           else  
           {  
                echo '<script>alert("Item already added!")</script>';  
                echo '<script>window.location="books_login.php"</script>';  
           }  
      }  
      else  
      {  
           $item_array = array(  
                'item_id'               =>     $_GET["id"],  
                'item_title'               =>     $_POST["hidden_title"],  
                'item_price'          =>     $_POST["hidden_price"],  
                'item_quantity'          =>     $_POST["quantity"]  
           );  
           $_SESSION["shopping_cart"][0] = $item_array;  
      }  
 }  
 if(isset($_GET["action"]))  
 {  
      if($_GET["action"] == "delete")  
      {  
           foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {  
                if($values["item_id"] == $_GET["id"])  
                {  
					$query = "SELECT * FROM books WHERE bookID='".$_GET["id"]."' "; 
					$result = mysqli_query($connect, $query);
					$row = mysqli_fetch_array($result);
					$new_quantity=$row["amount"]+$values["item_quantity"];
					$query = "UPDATE books SET amount='$new_quantity' WHERE title='".$row['title']."' ";
					$data = mysqli_query ($connect,$query)or die(mysqli_error($connect));
                    unset($_SESSION["shopping_cart"][$keys]);  
                    echo '<script>alert("Item removed!")</script>';  
                    echo '<script>window.location="shopping_cart.php"</script>';  
                }  
           }  
      }  
 }  
 
 
 
 
 ?>  
 
<!DOCTYPE html>
<html>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/3/w3.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<head>
		<title> Shopping Cart </title>
		<style type="text/css">
		</style>
		<link href='shopping_cart.css' rel='stylesheet' type='text/css'>
	</head>
	
	<body>
		<!-- Navigation -->
		<nav class="w3-bar w3-black">
			<a href="home_login.php" class="w3-button w3-bar-item">Home</a>
			<a href="books_login.php" class="w3-button w3-bar-item">Books</a>
			<a href="contact_login.php" class="w3-button w3-bar-item">Contact</a>
			<a href="myprofile.php" class="w3-button w3-bar-item"><span class="glyphicon glyphicon-user"></span>My Profile</a>
			<a href="shopping_cart.php" class="w3-button w3-bar-item"><span class="glyphicon glyphicon-shopping-cart"></span>Shopping Cart</a>
			<a href="shopping_cart_ro.php" class="w3-button w3-bar-item w3-right">RO</a>
			<a href ="logout.php" class="w3-button w3-bar-item w3-right"><span class="glyphicon glyphicon-log-out"></span>Sign Out</a>
		</nav>
		
		<div style="clear:both"></div>  
                <br />  
                <h3>Order Details</h3>  
                <div class="table-responsive">  
                     <table class="table table-bordered">  
                          <tr>  
                               <th width="40%">Item Name</th>  
                               <th width="10%">Quantity</th>  
                               <th width="20%">Price</th>  
                               <th width="15%">Total</th>  
                               <th width="5%">Action</th>  
                          </tr>  
                          <?php   
                          if(!empty($_SESSION["shopping_cart"]))  
                          {  
                               $total = 0;  
                               foreach($_SESSION["shopping_cart"] as $keys => $values)  
                               {  
                          ?>  
                          <tr>  
                               <td><?php echo $values["item_title"]; ?></td>  
                               <td><?php echo $values["item_quantity"]; ?></td>  
                               <td><?php echo $values["item_price"]; ?> lei</td>  
                               <td><?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?> lei</td>  
                               <td><a href="shopping_cart.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>  
                          </tr>  
                          <?php  
                                    $total = $total + ($values["item_quantity"] * $values["item_price"]);  
                               }  
                          ?>  
                          <tr>  
                               <td colspan="3" align="right">Total</td>  
                               <td align="right"><?php echo number_format($total, 2); ?> lei</td>  
                               <td></td>  
                          </tr>  
                          <?php  
                          }  
                          ?>  
                     </table>  
                </div>  
           </div>  	

	</body>
</html>