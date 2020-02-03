<?php

function getvalue($fieldname )
{
    return isset($_POST[$fieldname]) 
        ? $_POST[$fieldname] 
        : " " ;
}

print_r($_POST);
?>