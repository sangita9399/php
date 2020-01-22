<?php
    $number1 = 10;
    $number2 = 20;
   
    Sum();
    Minus();
    Multiply();
    Divide();
    Modulo();
    
    function Sum()
    {
        echo "Addition of two number is ".($GLOBALS['number1'] += $GLOBALS['number2'])."<br>";
    }
   
    function Minus()
    {
     echo "Subtraction of two number is ".($GLOBALS['number1'] -= $GLOBALS['number2'])."<br>";
    }
   
    function Multiply()
    {
     echo "Multiplication of two number is ".($GLOBALS['number1'] *= $GLOBALS['number2'])."<br>";
    }
   
    function Divide()
    {
     echo "Division of two number is ".($GLOBALS['number1'] /= $GLOBALS['number2'])."<br>";
    }
   
    function Modulo()
    {
     echo "Modulo of two number is ".($GLOBALS['number1'] %= $GLOBALS['number2'])."<br>";
    }
?>