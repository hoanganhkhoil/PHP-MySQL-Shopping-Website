<?php
// Khoi Hoang - Team 3.
// Mazen Aljuaid



   date_default_timezone_set('America/New_York');
   session_start();
   require_once 'dbconnect.php';
   
	//Get customerID.
   $id = $_SESSION['userSession']; 
   $query = $DBcon->query("SELECT customerName, customerAddress, customerPhone, customerEmail FROM Customers WHERE customerID='$id'");
   $row = $query->fetch_array();
   
   $name = $row['customerName'];
   $address = $row['customerAddress'];
   $phone = $row['customerPhone'];
   $email = $row['customerEmail'];
?>

<?php require('header.php'); ?>

<?php require('menu.php'); ?>

      <?php
         echo "<p style=\"text-align: center\">Order processed at ".date('H:i, jS F Y')."</p>";
         
         echo "<p style=\"text-align: center\"> Receiver: <b>$name</b> </p>" ;
         
         echo "<p style=\"text-align: center\"> Shipping address: <b>$address</b></p>" ;
         
         echo "<p style=\"text-align: center\"> Phone number: <b>$phone</b> </p>" ;
         
         echo "<p style=\"text-align: center\"> Email address: <b>$email</b> </p>" ;

         
         
         echo "<p style=\"text-align: center\"><h1 style=\"color: black;\"> Your order is as follows: </h1></p>";
      
      $total = 0;   
      
		
		//If cart is not empty. Display item.
      if(!empty($_SESSION["cart"]))
      {
         
         foreach($_SESSION["cart"] as $keys => $values)
         {
            echo '<center>';
            echo '<br>';
            echo '<p> Item ordered: <b>'. $values["item_name"]. '</b></p>'; 
            echo '<p> Quantity: <b>'. $values["item_quantity"]. '</b></p>';
            echo '<p> Price: <b>'. $values["product_price"]. '</b></p>';
            echo '<br>';
            echo '</center>';
            
			$total = $total + ($values["item_quantity"] * $values["product_price"]);
		}
		
	}

      ?>
      
      
      </table>
    </div>
	<center>
	<div>
		<p><u>Sub total</u>: $ <?php echo number_format($total,2); ?> </p>
		<p><u>Tax: </u>$ <?php echo number_format($total*0.1,2); ?> </p>
		<h3><u>Total: </u>$ <?php echo number_format($total*1.1,2); ?> </h3>
		<br>
      <h2 style="color: red">Thank you for ordering at Sonic Tech Store!</h2>
      <h2><a id="continue" href="product.php"> Click here to continue shopping</a></h2>
      
	</div>
	</center>
   
<?php require('footer.php'); ?>

<?php
 //Clear the cart after checked out.

 unset($_SESSION['cart']);

?>