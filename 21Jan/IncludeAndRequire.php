<!-- <?php
include "includedfile.php";
require "includedfile.php";
echo "Hi...";
?> -->

<?php

require "includedfile.php";
require_once "includedfile.php";
echo "hi";
?>

<?php
include "includedfile.php";
include_once "includedfile.php";

echo "Hi...";
?>

<?php

if(!@include_once("includefile.php") ) {
    echo 'can not include';
}

 require_once "includedfile.php";
 require "includedfile.php";
 echo "Hi...";

if(!@include ("includefile.php"))
{
echo "hi";
}


?>