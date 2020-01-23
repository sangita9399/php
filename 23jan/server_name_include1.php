<?php
$server_name = $_SERVER['SCRIPT_NAME'];
$host = $_SERVER['HTTP_HOST'];
echo $host;
?>

<form action = "<?php echo $server_name;?>" method = "POST">
<br>
<input type = "text" name = "email" value = "Email@gmail.com"><br>
<input type = "text" name = "password" value = "Password"><br>
<input type = "submit" name = "submit">

</form> 