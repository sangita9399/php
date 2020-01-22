<?php

$arr = [10,20,90,40,45];
$len = count($arr);

for($i = 0; $i < $len; $i++)
{
    for($j = ($i+1); $j < $len; $j++)
    {
        if($arr[$i] < $arr[$j])
        {
            $temp = $arr[$i];
            $arr[$i] = $arr[$j];
            $arr[$j] = $temp;
        }
    }
}
print $arr[0];

?>