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
    $prime_ans = array();
    $p = 0;
    for($j = 0; $j < count($ans); $j++)
    {
        $flag = 0;
        for($i = 2; $i < $ans[$j]; $i++)
        {
            if(($ans[$j] % $i) == 0)
            {
                $flag = 1;
                break;
            }
        }
        
        if($flag == 0)
        {
            $prime_ans[$p] = $ans[$j];
            $p++;
        }
    }
    $ans1 =1;
    for($k = 0; $k < count($prime_ans);$k++)
    {
        $ans1 = $ans1 * $prime_ans[$k];
    }
    echo $ans1;
?>
