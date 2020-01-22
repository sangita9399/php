<?php
    $num1 = 10;
    $num2 = 10;
    
    if($num1 == $num2)
    {
        echo "Both Numbers Are Equal<br>";
        if($num1 === $num2)
        {
            echo "Data Types Of Both Numbers Are Equal<br>";
        }
        else
        {
            echo "Data Types Of Both Numbers Is Not Equal<br>";
        }
    }
   
    if($num1 != $num2)
    {
        echo "Both Numbers Are Not Equal<br>";
        if($num1 > $num2)
        {
            echo $num1." Is greater number than ".$num2."<br>";
        }
        else
        {
            echo $num2." Is greater number than ".$num1."<br>";
        }
    }

    $num3 = 5;
    $num4 = 10;

    if($num3 <= $num4)
    {
       if($num3 < $num4)
       {
            echo $num3." is small number ".$num4."<br>";
       }
       else
       {
            echo "Both Numbers Are Equal<br>";
       }
    }
    else
    {
        echo $num4." is small number ".$num3."<br>";
    }
    
?>