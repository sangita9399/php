<?php

$string = "THis Show The More About Expression Matching";

if(preg_match("/ /",$string))
{
    echo "String Matched<br>";
}
else{
    echo "String Doesn't match<br>";
}

$str = "StringWithoutSpace";
function hasSpace($str)
{
    if(preg_match("/ /", $str))
    {
        return TRUE;
    }
    else
    {
        return FALSE;
    }
}
if(hasSpace($str))
{
    echo "String has a space<br>";
}
else
{
    echo "String does not have any space<br>";
}

$flag = 0;
$arr = array("san", "monu", "abc");
for($i = 0; $i < count($arr); $i++)
{
    if(preg_match("/ /", $arr[$i]))
    {
        echo "Array has a element with space<br>";
        $flag = 1;
    }
}
if($flag == 0)
{
    echo "Array does not have any element with space<br>";
}

$num = 1010.00;
if(preg_match('/10.1/',$num))
{
    echo "Number Matched <br>";
}
else
{
    echo "Number is not Matching. <br>";
}
?>