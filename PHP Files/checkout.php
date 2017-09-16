<?php
/* Khoi Hoang - Team 3 */
session_start();
require_once 'dbconnect.php';


//If cart is empty. Cannot check out. Show error.
if (isset($_SESSION['cart']) == "") {
   echo '<script>alert("Your cart is empty.")</script>';
			echo '<script>window.location="yourcart.php"</script>';
}

//Check if user already logged in. Jump to orderResult.php page. Otherwise, show log in require.
else if (isset($_SESSION['userSession'])!="") {
 header("Location: orderResult.php");    
 exit;
}
?>

<?php require('header.php'); ?>
<?php require('menu.php'); ?>


<!-- If user has not logged in. They will see this -->

<center><h1 style="color: red">Sorry you will have to log in first.</h1></center>
<center><h3><a id="orderLogin" href="index.php"> Click here to log in</a></h3></center>

