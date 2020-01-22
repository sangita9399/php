<?php

$age = array("Sangita" => "20", "Hariom" => "23", "Dharmraj" => "19");

foreach($age as $v => $v_value)
{
    echo "Age of " . $v . " is " . $v_value . "<br>";
}

echo "<br>";
$name = array(1 => "Sangita", 2 => "Mital");
echo $name[1] . "<br>";
echo $name[2] . "<br>";

$count = count($name);
for($i = 1; $i <= $count; $i++)
{
    echo $name[$i] . "<br>";
}

echo "<br>";
$cars = array("volvo" => "red", "BMW" => "green");
foreach($cars as $c => $el)
{
    echo "Color of the " . $c ." car is: " . $el ."<br>";
}
echo "<br>";
print_r($cars);
?>