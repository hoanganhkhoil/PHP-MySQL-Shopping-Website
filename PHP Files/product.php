<?php /* Khoi Hoang - Team 3 */ ?>

<?php
session_start();
require_once 'dbconnect.php';

?>

<?php require('header.php'); ?>

<?php require('menu.php'); ?>

<?php

	//Display all products in Products table.
	$query = "SELECT * FROM Products ORDER BY productID ASC";
	$result = $DBcon->query($query);
	if($result->num_rows > 0)
	{
		while($row = $result->fetch_array())
		{
			?>
            <div>
            <form method="post" action="shop.php?action=add&id=<?php echo $row["productID"]; ?>">
            <div style="border: 1px solid #eaeaec; margin: -1px 19px 3px -1px; box-shadow: 0 1px 2px rgba(0,0,0,0.05); padding:10px;" align="center">
            <img width="25%" src="<?php echo $row["productImage"]; ?>">
            <h5><?php echo $row["productName"]; ?></h5>
            <h5>$ <?php echo $row["productPrice"]; ?></h5>
            <input type="number" name="quantity" value="1">
            <input type="hidden" name="hidden_name" value="<?php echo $row["productName"]; ?>">
            <input type="hidden" name="hidden_price" value="<?php echo $row["productPrice"]; ?>">
            <input type="submit" name="add" style="margin-top:5px;" value="Add to Cart">
            </div>
            </form>
            </div>
            <?php
		}
	}
	?>












<?php require('footer.php'); ?>