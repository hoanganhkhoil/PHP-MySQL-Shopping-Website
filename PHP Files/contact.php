<?php require('header.php'); ?>
<?php require('menu.php'); ?>

<?php
/*Khoi Hoang - Team 3 */
   

    if(isset($_POST['submit'])) {
        $to = "sonicTechStore@example.com";
        $subject = $_POST['name'];
        $message = $_POST['message'];
        
        mail($to, $subject, $message);
        echo '<script>alert("Successfully send message")</script>';
		echo '<script>window.location="contact.php"</script>';
    }
?>

<div align="center" style="margin: 15px;">
<form method="post">
<table class="contact">
    <tr class="contact">
        <td class="contact" colspan="2"><h2>If you wish to contact us, send us an email.<h2></td>
    </tr>
    
    <tr class="contact">
        <td class="contact"><b>Your name:</b></td>
        <td class="contact"><input type="text" name="name" required></td>
    </tr>

    <tr class="contact">
        <td class="contact"><b>Telephone:</b> </td>
        <td class="contact"><input type="text" maxlength="10" required></td>
    </tr>

    <tr class="contact">
        <td class="contact"><b>Email address:</b> </td>
        <td class="contact"><input type="email" required></td>
    </tr>

    <tr class="contact">
        <td class="contact"><b>Message:</b> </td>
        <td class="contact"><textarea rows="10" cols="40" name="message" required></textarea>
    </tr>
    
    <tr class="contact">
        <td class="contact"></td>
        <td class="contact"><input type="submit" name="submit"></td>
    </tr>
</table>
</form>
</div>

<?php require('footer.php') ?>
 