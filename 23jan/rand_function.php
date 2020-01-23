<?php

$rand = rand();
echo " Default Random Number:" . $rand . "<br>";

$max = getrandmax();
echo "Default Maximum Random Number: " . $max ."<br>";

?>
<hr>
<?php

if(isset($_POST['dice']))
{
    $dice = rand(1,6);
    echo "Dice Number is: " . $dice;
}

?>
<hr>
<form action = "rand_function.php" method = "POST">
<br>
<input type = "submit" value = "Roll Dice" name = "dice"> 
<br>
</form>