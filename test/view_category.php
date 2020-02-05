<?php
session_start();
include "database.php";
if(isset($_POST['add_category']))
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

function fetch_post()
{
     $sql = "SELECT p.post_id, p.title, p.published_at,c.p_category 
            FROM blog_post p JOIN parent_category c ON p.post_id = c.parent_cat_id";
        
    $result = mysqli_query($GLOBALS['conn'], $sql) ;
    while($row = mysqli_fetch_assoc($result))
    {
        echo "<tr>";
        echo "<td>$row[post_id]</td>";
        echo "<td>$row[p_category]</td>";
        echo "<td>$row[title]</td>";
        echo "<td>$row[published_at]</td>";
        echo "<td><input type = 'submit' name = 'edit' value = 'EDIT'>
            <input type = 'submit' name = 'delete' value = 'DELETE'></td> ";
        echo "</tr>";
    }
}
if(isset($_GET['delete']))
{
    delete_post();
}



?>