<?php

$ip_add = $_SERVER['REMOTE_ADDR'];
$ip_blocked = ['127.0.0.1', '::1', '190.1.10.0'];
foreach($ip_blocked as $ip)
{
    if($ip == $ip_add)
    {
        echo "HI...<br>";
    }
    
}

?>

