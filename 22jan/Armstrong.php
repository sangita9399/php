<?php
if(isset($_GET['num1']) && !empty($_GET['num1']))
{
$num = $_GET['num1'];
$str_len = strlen($num);
$offset = 0;
$sub =array();
$ans = 0;
for($i = 0; $i < $str_len; $i++)
{
    $sub[$i] = substr($num, $offset, 1);
    $offset = $offset + 1;
    $ans = $ans + ($sub[$i]*$sub[$i]*$sub[$i]);
}
if($ans == $num)
{
    echo "Number is Armstrong";
}
else
{
    echo "Number is not Armstrong";
}
}
?>
<form action = "Armstrong.php" method = "GET">

Enter number:<input type = "text" name = "num1" ><br><br>
<input type = "submit" name = "submit">

</form>