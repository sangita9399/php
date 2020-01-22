<?php
    $num1 = 40;
    $num2 = 30;
    $fact1 = array();
    $fact2 = array();
    $ans = array();
    $j = 0;
    $k = 0;
    if($num1 > $num2)
    {
        $temp =$num1;
        $num1 = $num2;
        $num2 = $temp;
    }
    for($i = 2; $i< $num1; $i++)
    {
        if(($num1 % $i) == 0)
        {
            $fact1[$j] = $i;
            $j++;
        }
    }
    for($i = 2; $i< $num2; $i++)
    {
        if(($num2 % $i) == 0)
        {
            $fact2[$k] = $i;
            $k++;
        }
    }
    $c1 = count($fact1);
    $c2 = count($fact2);
    $s = 0; 
    for($k = 0; $k < $c2;$k++)
    {
        for($j = 0; $j < $c1; $j++)
        {
            if($fact1[$j] == $fact2[$k])
            {
                $ans[$s] = $fact1[$j];
                $s++;
            }
        }
    }
   print_r($ans);
  $length = count($ans);
  echo "<br> HCF is:" . $ans[$length - 1];  
  
?>
