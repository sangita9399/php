<?php

$string = "Hello World";

$pos = strpos($string, "World");
echo $pos+1 . "<br>";

$pos1 = strpos(123456,"34");
echo $pos1+1 . "<br>";

$pos2 = strpos(11123449053445, "344", 9);
echo $pos2 . "<br>";

$pos3 = strpos('This is example of string position '," ",6);
echo $pos3 . "<br>";

?>