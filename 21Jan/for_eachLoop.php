<?php
$colors = array("Red", "Green", "Blue");
foreach($colors as $col)
{
    echo "$col<br>";
}

echo "<br>";
$age = array("Sangita" => "20", "Hariom" => "23", "Dharmraj" => "19");
foreach($age as $v => $value)
{
    echo "Age of " . $v . "is" . $value . "<br>";
}

echo "<br>";
$name = array(1 => "Sangita", 2 => "Mital");
foreach($name as $element => $values)
{
    echo "Id is: " . $element . " Name is: " . $values ."<br>";
}

echo "<br>"; 
$En_number = array("13tw407004" => "Hiral", "14te402000" => "Priyanka");
foreach($En_number as $el => $val)
{
    echo "Enrollment No. of " . $el . " is " . $val . "<br>";
}

echo "<br>";
$cars = array("volvo" => "red", "BMW" => "green");
foreach($cars as $c => $el)
{
    echo "Color of the " . $c ." is: " . $el ."<br>";
}

?>