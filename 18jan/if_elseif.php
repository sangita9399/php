<?php
    $num1=10;
    $num2=20;
    $num='10';
    $text="hi";
    $text1="hello";
    $day="saturday";

    if(1)
    {
       echo "True<br>";
    }
    else{
      echo "False<br>";
    }
    
    if($num1>$num2)
    {
        echo $num1." is greater number<br>";
    }
    else if($num2>$num1){
        echo $num2." is greater number<br>";
    }
    else{
        echo $num1." and ".$mun2." are equal<br>";
    }

    if($text==$text1)
    {
        echo "Both strings are equal<br>";
    }
    else{
        echo "Both strings are not equal<br>";
    }

    if($num1===$num){
        echo "Both numbers are equal<br>";
    }
    else{
        echo "Type of both numbers is not matching<br>";
    }

    if(date('l')==$day)
    {
        echo "Today is ".$day."<br>";
    }
    else{
        echo "Today is ".date('l');
    }
?>