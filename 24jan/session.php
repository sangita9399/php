<form action = "session.php" method = "POST">
<br>
User Name:<br>
<input type = "text" name = "name" value = "Name"><br>
Email:<br>
<input type = "text" name = "email" value = "Email@gmail.com"><br>
Password:<br>
<input type = "password" name = "password" value = "Password"><br>
<input type = "submit" name = "submit" value = "LOGIN" ><br><br>
<input type = "submit" name = "logout" value = "LOGOUT" ><br><br>
</form> 
<?php
echo "<hr>";
session_start();
if(isset($_POST['email']) && isset($_POST['password']) 
    && isset($_POST['submit']) && isset($_POST['name']))
{
    
    $uname = htmlentities($_POST['name']);
    $email = htmlentities($_POST['email']);
    $pass = htmlentities($_POST['password']);
    if(!empty($uname) && !empty($email) && !empty($pass))
    {
     
        if($email == "Email@gmail.com" && $pass == "Password")
        {
            $redirect_page = "htmlentity_form.php";
            $_SESSION['uname'] = $uname;
            $_SESSION['email1'] = $email;
            $_SESSION['pass'] = $pass;
            header('Location:' . $redirect_page);
        }
        else
        {
            echo "Please Enter correct values";
        }
    }
}
if(isset($_POST['logout']))
{
    if(isset($_SESSION['uname']) &&  $_SESSION['email1'] && $_SESSION['pass'])
    {
        session_unset();
        echo "Session is unset.";
    }
    else{
        echo "First do login";
    }
}
?>