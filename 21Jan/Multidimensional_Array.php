<?php

$person = array(array(1, "Sangita", 20), 
                array(2, "Mital", 21), 
                array(3, "Hiral", 20));

for ($i = 0; $i < count($person); $i++)
{
    echo $person[$i][0] . " " . $person[$i][1] . " is " .$person[$i][2] . " Years old <br>";     
}

echo "<br>";
print_r($person);

echo "<br>";
$name = array("Name" => array("Sangita", "Hiral"), "Last Name" => array("Rathod", "Chauhan"));
foreach($name as $element => $subelment )
{   echo "$element<br>";
    foreach($subelment as $value)
    {
        echo "$value<br>";
    }
    echo "<br>";
}

echo "<br>";
print_r($name);

echo "<br>";
$cars = array(array("BMW", 40, 20),array("Volvo",50,30));
for($i = 0; $i < count($cars); $i++)
{
    echo $cars[$i][0] . ": In the Stock: " . $cars[$i][1] . ". And sold " .$cars[$i][2] . "<br>";
}

?>
