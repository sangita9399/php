<?php

require "server_name_include1.php";
echo "<hr>";
if(isset($_POST['email']) && isset($_POST['password']) && isset($_POST['submit']))
{
    $email = $_POST['email'];
    $pass = $_POST['password'];
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