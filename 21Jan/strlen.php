<?php

$string = "String Length Function!..";
$str_len = strlen($string);

echo "Length of the " . $string . " is " . $str_len . "<br>";
echo "String length:" . strlen(4566) . "<br>";
echo "String length:" . strlen(FALSE) . "<br>";
$str = "strlen()";
$str_len1 = strlen($str);
for($i = 0; $i < $str_len1; $i++)
{
    echo $i . "<br>";
}
echo "<br>";
$str1 = strlen("\n Hi ;");
echo "length of the String is:" . $str1;
?>