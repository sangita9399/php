<?php
$b = 5;
$cars = array("Volvo", "BMW", "Toyota");
$name = array("Hariom", "Sangita", "Dharmraj" ,"Mital");
$x = 0; 
echo "The numbers are:<br> ";
$a = 0;
while($a < 3)
{
    echo $a . "<br>";
    $a++;
}

echo "<br><br>";
echo "The numbers are:";
while($b > 0)
{
    echo $b . "<br>";
    $b--;
}

echo "<br><br>";
echo "Cars are: ";
$c = 0;
while($c < count($cars))
{
    echo $cars[$c] . "<br>";
    $c++;
}

echo "<br><br>";
echo "Names Of The Students Are:";
$s = 0;
while($s < count($name))
{
    echo ($s + 1) . "  " . $name[$s] . "<br>";
    $s++;
}
echo "<br>";
while($x <= 50) {
    echo "The number is: $x <br>";
    $x+=10;
}

?>