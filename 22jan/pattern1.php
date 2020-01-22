<?php
echo "<table>";
for($i = 1; $i <= 8; $i++)
{
     echo "<tr>";
   for($j = 1;$j <= $i; $j++)
   {
        echo "<td>*</td> ";
   }
   echo "</tr>";
}
echo "</table>";
?>

<?php
echo "<br><table>";
for($i = 1; $i <= 8; $i++)
{
     echo "<tr>";
   for($j = 1;$j <= $i; $j++)
   {
        echo "<td>$j</td> ";
   }
   echo "</tr>";
}
echo "</table>";
?>

<?php
echo "<br><table>";
for($i = 1; $i < 4; $i++)
{
     echo "<tr>";
     $k = $i;
   for($j = 1;$j < 4; $j++)
   {
        if($j == 1)
        {
           echo "<td>$k</td> ";
        }
        else{
          $k=$k+4;
          echo "<td>$k </td>";
        }
   }
   echo "</tr>";
}
echo "</table>";
?>

<?php
echo "<br><table>";
for($i = 1;$i <= 5; $i++)
{
     echo "<tr>";
     for($j = 1;$j <= 5; $j++)
     {
          if($i == 1 || $i ==4)
          {
               echo "<td>*</td>";
          }
          else{
               if($j == 1 || $j ==5)
               {
                    echo "<td>*</td>";
               }
               else
               {
                    echo "<td></td> ";
               }
          }
     }
     echo "</tr>";
}
echo "</table>";
?>

<?php
echo "<br><table>";
$c = 1;
for($i = 1; $i <= 5; $i++)
{
     echo "<tr>"; 
   for($j = 1;$j <= $i; $j++)
   {
        echo "<td>$c</td>";
        $c++;
   }
   echo "</tr>"; 
}
echo "</table>";
?>

<?php
echo "<br><table>";
$length = 8;
for($i = 1; $i <= $length; $i++)
{
     echo "<tr>"; 
   for($j = $length;$j >= $i; $j--)
   {
        echo "<td>*</td>";
   }
   echo "</tr>"; 
}
echo "</table>";
?>

<?php
echo "<br><table>";
$length = 8;

for($i = 1; $i <= $length; $i++)
{
     echo "<tr>"; 
     $k = 1;
   for($j = $length;$j >= $i; $j--)
   {
        echo "<td>$k</td> ";
        $k++;
   }
   echo "</tr>";
}
echo "</table>";
?>

<?php



?>
