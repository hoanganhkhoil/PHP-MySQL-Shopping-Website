<?php // Khoi Hoang - Team 3.
      // Mazen Aljuaid

session_start();
require_once 'dbconnect.php';

//If already logged in. Show success page.
if (isset($_SESSION['userSession'])!="") {
 header("Location: success.php");
 exit;
}


//If user click button login. Get username and password.
if (isset($_POST['btn-login'])) {
 
 $userName = strip_tags($_POST['username']);
 $userPass = strip_tags($_POST['password']);
 
 $userName = $DBcon->real_escape_string($userName);
 $userPass = $DBcon->real_escape_string($userPass);
 
 
 //Getting user information by using username. Then compare password.
 $query = $DBcon->query("SELECT customerID, userName, userPassword FROM Customers WHERE userName='$userName'");
 $row=$query->fetch_array();
 
 //If user exists. $count must = 1.
 $count = $query->num_rows; 
 
 //Check if password is correct or not. If match, show success page.
 if (password_verify($userPass, $row['userPassword']) && $count==1) {
  $_SESSION['userSession'] = $row['customerID'];
  header("Location: success.php");
 }
 
 
 //If password not match, show error.
 else {
  $msg = "<div>
          <h3 style=\"color: red\"> &nbsp; Invalid Username or Password !</h3>
          </div>";
 }
 $DBcon->close();
}
?>

<?php require('header.php'); ?>
<?php require('menu.php'); ?>


<center>
       <form method="post" id="login-form">
      
        <h2>Sign In.</h2>
        
        <hr />

        
      <?php
           if(isset($msg)) {
                 echo $msg;
           }
      ?>
        <div>
        <input style="width: 25%; height: 5%; border-radius: 5px;" type="text" class="form-control" placeholder="Enter your username" name="username" required />
        <span></span>
        </div>
        

        <div>
        <input style="width: 25%; height: 5%; border-radius: 5px;" type="password" class="form-control" placeholder="Enter your password" name="password" required />
        </div>
       
      <hr />

            <br>
            <button style="width: 25%; height: 3%" type="submit" class="btn btn-default" name="btn-login" id="btn-login">
            <span></span> &nbsp; Log In
            </button> 
            
            <br>
            <br>
            <a id="signup" href="register.php" class="btn btn-default">Do not have an account? Click here to sign up!</a>

      </form>

</center>

<?php require('footer.php'); ?>