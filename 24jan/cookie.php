<form action = "cookie.php" method = "POST">
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

if(isset($_POST['email']) && isset($_POST['password']) 
     && isset($_POST['name']))
{
    $uname = htmlentities($_POST['name']);
    $email = htmlentities($_POST['email']);
    $pass = htmlentities($_POST['password']);
    if(isset($_POST['submit']))
    {
    if(!empty($uname) && !empty($email) && !empty($pass))
    {
        if($email == "Email@gmail.com" && $pass == "Password")
        {
            setcookie('uname',$uname, time() + 3600); 
            echo "Welcome " . $_COOKIE["uname"];
        }
        else
        {
            echo "Please Enter correct values";
        }
    }
    }
    if(isset($_POST['logout']))
    {
    if(isset($_COOKIE['uname']))
    {
        setcookie('uname', $uname, time() - 3600);
        echo "Cookie is unset.";
    }
    else{
        echo "First do login";
    }
    
}
}
?>