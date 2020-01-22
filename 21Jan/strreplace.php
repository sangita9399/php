<?php

$string = "hello world!";

$string = str_replace( "world", "Sangita",$string);
echo $string . "<br>";

$str1 = "This is example of string replace<br>";

$arr1 = array('a','b','c','d');
$arr2 = array('b','c','d','e');
echo str_replace($arr1,$arr2,'a') . "<br>";
$str3 = 12345634;
echo $str3 = str_replace($str3,'34','22') ."<br>";

$find = array('is','string');
$replace = array('Is','String');
echo str_replace($find,$replace,$str1);
?>