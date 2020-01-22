<?php
$a ;
$b = 10;
$cars = array("Volvo", "BMW", "Toyota");
$name = array("Hariom", "Sangita", "Dharmraj" ,"Mital");
echo "The numbers are:<br> ";
for($a = 0; $a <= 5; $a++)
{
   echo $a . " <br>";
}

echo "The numbers are:<br> ";
for($a = 0; $a <= $b; $a++)
{
    echo $a . "<br>";
}

echo "The numbers are:<br> ";
for($a = 5; $a >= 0; $a--)
{
    echo $a . "<br>";
}

echo "Cars are:<br> ";
for($a = 0; $a < count($cars); $a++)
{
    echo $cars[$a] . "<br>";
}

echo "Names Of The Students Are:<br>";
for($a = 0; $a < count($name); $a++)
{
    echo ($a + 1) . " " . $name[$a] . "<br>";
}
?>