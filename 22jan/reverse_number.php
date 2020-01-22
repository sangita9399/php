<?php
if(isset($_GET['num1']) && !empty($_GET['num1']))
{
$num = $_GET['num1'];
$rev = 0;
while($num > 1)
{
    $reminder = $num % 10;
    $rev = $rev * 10 + $reminder;
    $num = $num / 10;
}
echo "Reverse Number is:" . $rev;
}
?>
<form action = "reverse_number.php" method = "GET">

Enter No. :<input type = "text" name = "num1" ><br><br>
<input type = "submit" name = "submit">

</form>