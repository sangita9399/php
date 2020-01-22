<?php
if(isset($_GET['num1']) && !empty($_GET['num1']))
{
$num1 =0 ;
$num2 = 1;
$len = $_GET['num1'];
$ans = 1;
echo "Fibonaccie series:<br>";
echo $num1 . "<br>" . $num2 . "<br>";
for($i = 2; $i < $len; $i++)
{
    $ans = $num1 + $num2;
    echo $ans . "<br>";
    $num1 = $num2;
    $num2 = $ans;
}
}
?>
<form action = "fibinaccie_series.php" method = "GET">

<input type = "text" name = "num1" ><br><br>
<input type = "submit" name = "submit">

</form>