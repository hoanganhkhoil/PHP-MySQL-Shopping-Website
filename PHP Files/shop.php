<?php

// Khoi Hoang - Team 3

session_start();
require_once 'dbconnect.php';

if(isset($_POST["add"]))
{
    //Check if cart is not empty.
	if(isset($_SESSION["cart"]))
	{
		$item_array_id = array_column($_SESSION["cart"], "product_id");
		
        //Check if the same items not added to cart.
        if(!in_array($_GET["id"], $item_array_id))
		{
			$count = count($_SESSION["cart"]);
			$item_array = array(
			'product_id' => $_GET["id"],
			'item_name' => $_POST["hidden_name"],
			'product_price' => $_POST["hidden_price"],
			'item_quantity' => $_POST["quantity"]
			);
			$_SESSION["cart"][$count] = $item_array;
			echo '<script>alert("Successfully added to cart")</script>';
			echo '<script>window.location="product.php"</script>';
			
		}
        
        //if item already added to cart. Show Error.
		else
		{
			echo '<script>alert("Products already added to cart")</script>';
			echo '<script>window.location="product.php"</script>';
		}
	}
    
    //if cart is empty. Create SESSION["cart"]
	else
	{
		$item_array = array(
		'product_id' => $_GET["id"],
		'item_name' => $_POST["hidden_name"],
		'product_price' => $_POST["hidden_price"],
		'item_quantity' => $_POST["quantity"]
		);
		$_SESSION["cart"][0] = $item_array;
		echo '<script>alert("Successfully added to cart")</script>';
		echo '<script>window.location="product.php"</script>';
	}
}

//If user click delete item. Unset SESSION["cart"] to empty the card.
if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["cart"] as $keys => $values)
		{
			if($values["product_id"] == $_GET["id"])
			{
				unset($_SESSION["cart"][$keys]);
				echo '<script>alert("Product has been removed")</script>';
				echo '<script>window.location="yourcart.php"</script>';
			}
		}
	}
}
?>