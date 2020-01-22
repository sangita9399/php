<?php

    $name="Sangita";
    $num1=10;
    $num=5;
    $num2=20.2;
    echo "Name is:".$name."<br>";
    if($num1>=$num)
    {
        echo $num2."is Greater number than".$num1."<br>";
    }
    echo "Sum of two numbers is:".($num1+$num2)."<br>";
    function sum()
    {
       echo $GLOBALS['num1']+$GLOBALS['num2'];
    }
    echo $num2;
?>