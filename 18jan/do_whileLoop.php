<?php
$a = 0;
$b = 5;
$cars = array("Volvo", "BMW", "Toyota");
$name = array("Hariom", "Sangita", "Dharmraj" ,"Mital");
$x = 0; 
echo "The numbers are:<br> ";
do
{
    echo $a . "<br>";
    $a++;
}while($a < 3);
echo "<br>";
echo "The numbers are:<br> ";
do
{
    echo $b . "<br>";
    $b--;
}while($b > 0);

$c = 0;
echo "<br>";
echo "Cars are:<br> ";
do
{
    echo $cars[$c] . "<br>";
    $c++;
}while($c < count($cars));

$s=0;
echo "<br>";
echo "Names Of The Students Are:<br>";
do
{
    echo ($s + 1) . " " . $name[$s] . "<br>";
    $s++;
}while($s < count($name));
echo "<br>";
do
{
    echo "The number is: $x <br>";
    $x+=10;
}while($x <= 50);

?>