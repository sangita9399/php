
<?php

$str = "Hi...";
echo strtoupper($str) . "<br>";
echo strtolower($str) . "<br>";
echo "<br>";
if(isset($_GET['name']) && !empty($_GET['name']))
{
    $user_name = $_GET['name'];
    if("sangita" == strtolower($user_name) )
    {
        echo "Valid user";
    }
    else{
        echo ".....";
    }
}
echo "<br>";
if(isset($_GET['branch']) && !empty($_GET['branch']))
{
    $user_name = $_GET['branch'];
    if("CE" == strtoupper($user_name) )
    {
        echo "Valid user";
    }
    else{
        echo ".....";
    }
}
?>
<form method = "GET" action = "strformating.php">
    Name:<input type="text" name="name"><br><br>
    Branch:<input type="text" name="branch"><br><br>
    <input type="submit" value="Submit">
</form>
