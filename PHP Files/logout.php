<?php

//Khoi Hoang - Team 3.

session_start();

if (!isset($_SESSION['userSession'])) {
 header("Location: index.php");
} else if (isset($_SESSION['userSession'])!="") {
 header("Location: home.php");
}


//If user click log out. Session_destroy().
if (isset($_GET['logout'])) {
 session_destroy();
 unset($_SESSION['userSession']);
 header("Location: index.php");
}