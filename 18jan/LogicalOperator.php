<?php

$name = "Sangita.r";
$pwd = "Rathod.s" ;

if($name == "Sangita" && $pwd == "Rathod")
{
    echo "Valid User. <br>";
}

else if($name == "Sangita" || $pwd == "Rathod")
{
    if($name != "Sangita")
    {
        echo "Name Is Not Valid. <br>";
    }
    else
    {
        echo "Password Is Not Valid. <br>";
    }
}
else
{
    echo "Both Name And Password Is Not Matching <br>";
}

if(!1)
{
    echo "False <br>";
}
else
{
    echo "True <br>";
}


?>