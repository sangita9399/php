<?php

if(isset($_POST['add_post']))
{
    header("Location:add_post.php");
}
if(isset($_POST['my_profile']))
{
    header('Location:register.php');
}
if(isset($_POST['manage_category']))
{
    header("Location:add_category.php");
}

?>