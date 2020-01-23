<!-- <?php ob_start();?> -->

<form action = "header_redirect.php" method = "GET">
<br>
<input type = "text" name = "email" value = "Email@gmail.com"><br>
<input type = "text" name = "password" value = "Password"><br>
<input type = "submit" name = "submit">
<br>
</form>
<?php
$redirect = true;
$redirect_page = "form.php";
if(isset($_GET['submit']))
{
    header('Location:' . $redirect_page);
}
// ob_end_flush();
?>

