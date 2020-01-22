<?php

$str1 = "This is example of sub-string replace<br>";

echo substr_replace($str1,'Is',5,2);
echo substr_replace($str1,'Example',8,7);

echo substr_replace(12345690, '78',6,2). "<br>";

echo substr_replace(12345690, '78',6,-2);

?>