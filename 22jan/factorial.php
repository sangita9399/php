<?php
if(isset($_GET['num']) && !empty($_GET['num']))
{
    $num = $_GET['num'];
    $fact =1;
    for($i = 1; $i <= $num; $i++)
    {
        $fact = $fact * $i;
    }
    echo "Factorial of:" . $num . " is " . $fact; 
}

?>
<form action = "factorial.php" method = "GET">

<input type = "text" name = "num" ><br><br>
<input type = "submit" name = "submit">

</form>