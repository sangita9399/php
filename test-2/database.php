<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, 'blog_app');
if(! $conn ) {
   echo "Connected failure<br>";
   die;
}




?>