<?php
if(isset($_GET['num1']) && !empty($_GET['num1']))
{
$num = $_GET['num1'];
$flag = 0;
for($i = 2; $i < $num; $i++)
{
    if(($num % $i) == 0)
    {
        $flag = 1;
        break;
    }
}

if($flag == 0)
{
    echo "Entered number is prime";
}
else{
    echo "Entered number is not prime";
}
}
?>

<form action = "prime.php" method = "GET">

Enter No. :<input type = "text" name = "num1" ><br><br>
<input type = "submit" name = "submit">

</form>
