<?php

$num1 = 40;
$fact1 = array();
$j = 0;
for($i = 1; $i<= $num1; $i++)
{
    if(($num1 % $i) == 0)
    {
        $fact1[$j] = $i;
        $j++;
    }
}
print_r($fact1);

?>