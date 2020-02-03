<?php
include "database.php";

function getvalue($fieldname )
{
    return isset($_POST[$fieldname]) 
        ? $_POST[$fieldname] 
        : " " ;
}

if(isset($_POST['login']))
{
    fetch_row();
}
if(isset($_POST['register']))
{
    header("Location:register.php");
}
function fetch_row()
{

   $sql = "SELECT email, password FROM registration";
   $result= mysqli_query($GLOBALS['conn'], $sql) ;  
   if(!$result)
   {
       echo "could not fetch row<br>" . mysqli_error($GLOBALS['conn']);
   }
   else
   {
    $flag = 0;
    while($row = mysqli_fetch_array($result))
    {   
         if($row['email'] == getvalue('email') && $row['password'] == getvalue('password'))
         {
            header('Location:category.php');
         }
         else
         {
             echo "invalid email or password";
         }
    }
    }
}

?>