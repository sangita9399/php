<?php

$name = array("Mital", "Priyanka", "Hiral", "Urmi");
for($i = 0; $i < count($name); $i++)
{
    echo ($i + 1) . " Name is " . $name[$i] . "<br>";
}

echo "<br>";
$color = array("Red", "Green", "Yellow");
echo "colors are:";
print_r($color);

echo "<br><br>";
$cars = array("BMW", "volvo");
echo "cars are:";
print_r($cars);

echo "<br><br>";
$age =array(22,20,20,21);
for($i = 0; $i < count($age); $i++)
{
    echo ($i+1) . ". " . $name[$i] . " is " . $age[$i] . "Years Old! <br>";
}

echo "<br>";
$names = array(1 => "Sangita", 2 => "Mital");
foreach($names as $element => $values)
{
    echo "Id is: " . $element . " Name is: " . $values ."<br>";
}
?>