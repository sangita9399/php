<?php
include "database.php";
session_start();
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

   $sql = "SELECT r_id, email, password FROM registration";
   $result= mysqli_query($GLOBALS['conn'], $sql) ;  
    while($row = mysqli_fetch_assoc($result))
    {  
        $flag = 0; 
        echo $row['email'];
         if($row['email'] == $_POST['email'] && $row['password'] == $_POST['password'])
         {
            $now = date('D/M/Y || H:i:s ', time());
             $_SESSION['u_id'] = $row['r_id'];
            // echo $_SESSION['u_id'];
                $sql = "INSERT INTO registeration(login_at)values('$now')";
                mysqli_query($GLOBALS['conn'],$sql);
                
             $flag = 1;
         break;
         }  
    }
    if($flag == 1)
    {
        header('Location:category.php');
    }
    else
    {
        echo "invalid email or password";
    }
    
}

?>