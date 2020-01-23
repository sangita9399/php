<form action = "htmlentity_form.php" method = "POST">
<br>
<input type = "text" name = "email" value = "Email@gmail.com"><br>
<input type = "text" name = "password" value = "Password"><br>
<input type = "submit" name = "submit">

</form> 
<?php
echo "<hr>";
if(isset($_POST['email']) && isset($_POST['password']) && isset($_POST['submit']))
{
    $email = htmlentities($_POST['email']);
    $pass = htmlentities($_POST['password']);
    if(!empty($email) && !empty($pass))
    {
        echo "Email Id is: " . $email . "<br>";
        echo "Password is: " . $pass . "<br>";
    }
    else
    {
        echo "Please Login";
    }
}

?>