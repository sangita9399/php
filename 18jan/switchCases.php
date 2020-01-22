<?php
$favcolor = "red";

switch ($favcolor) {
    case "red":
        echo "Your favorite color is red!";
        break;
    case "blue":
        echo "Your favorite color is blue!";
        break;
    case "green":
        echo "Your favorite color is green!";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";
}

echo "<br>";
$name = "sangita";

switch ($name) {
    case "sangita":
        echo "Your Name is Sangita";
        break;
    case "blue":
        echo "Your Name is Hariom";
        break;
    default:
        echo "Your Name is neither SAngita, nor Hariom!";
}

echo "<br>";
$x = 1;

switch ($x) {
    case 1:
        echo "True";
        break;
    case 0:
        echo "False";
        break;
    default:
        echo "Enter correct No.";
}

echo "<br>";
echo "1.Addition<br> 2.Subtraction<br> 3.Multiplication<br> 4.Division<br>";
$num1 = 10;
$num2 = 5;
$ch = 2;
switch($ch)
{
    case 1:
        echo "Addition is:" . ($num1 + $num2);
        break;
    case 2:
        echo "Subtraction is:" . ($num1 - $num2);
        break;
    case 3:
        echo "Multiplication is:" . ($num * $num2);
        break;
    case 4:
        echo "Division is:" . ($num1 / $num2);
        break;
    default:
        echo "Enter correct choice.";
}
?>