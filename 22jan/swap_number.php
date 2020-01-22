<?php

$no1 = 10;
$no2 = 20;

echo "Number 1:" .$no1 ."<br>";
echo "Number 2:" .$no2 ."<br>";
$no1 = $no1 + $no2;
$no2 = $no1 - $no2;
$no1 = $no1 - $no2;
echo "After swapping:<br>";
echo "Number 1:" .$no1 ."<br>";
echo "Number 2:" .$no2 ."<br>";
?>