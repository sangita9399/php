<?php

class String_Match
{
   // protected $matches = [];
    public function str_match($str_origin, $str_con)
    {
        if(preg_match("/$str_con/",$str_origin))
        {
            echo "String Matched.<br>"; 
        }
        else
        {
            echo "String Doesn't Match.<br>";
        }
    }
    public function str_extract($str1, $str2)
    {
        if(preg_match($str2,$str1,$matches))
        {
            echo "<pre>";
            print_r($matches);
            echo "</pre>";
        }
        else
        {
            echo "String Doesn't Match.<br>";
        }
    }
    
   
}



?>