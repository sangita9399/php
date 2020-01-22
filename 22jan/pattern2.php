<style>
.c1{
    width:8px;
    background: black;
    height:8px;
}
.c2{
    width:8px;
    background: white;
    height:8px;
}
</style>
<?php
echo "<table border='1'>";
for($i = 1; $i <= 5; $i++)
{
    echo "<tr>";
    for($j =1; $j <= 5; $j++)
    {
        $ans = $i * $j;
        echo "<td>$i * $j = $ans </td>" ;  
    }
    echo "</tr>";
}
echo "</table>";
?>


<?php
echo "<br>";
echo "<table border='1'>";
for($i = 1; $i <= 10; $i++)
{
    echo "<tr>";
    for($j =1; $j <= 10; $j++)
    {
        $ans = $i * $j;
        echo "<td>$ans </td>" ;  
    }
    echo "</tr>";
}
echo "</table>";
?>

<?php

echo "<br>";
echo "<table border='1'>";
for($i = 1; $i <= 8; $i++)
{
    echo "<tr>";
    for($j =1; $j <= 8; $j++)
    {   if(($i % 2) == 0 )
        {
            if(($j % 2 == 0))
            {
                echo "<td class='c1'></td>" ;
            }
            else{
                echo "<td class='c2'></td>" ;  
            }
        } 
        else{
            if(($j % 2 != 0))
            {
                echo "<td class='c1'></td>" ;
            }
            else{
                echo "<td class='c2'></td>" ;  
            }
        } 
    }
    echo "</tr>";
}
echo "</table>";

?>

