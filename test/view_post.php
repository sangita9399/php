<?php
session_start();
include "database.php";
if(isset($_POST['add_post']))
{
    header("Location:add_category.php");
}
if(isset($_POST['my_profile']))
{
    header('Location:register.php');
}
if(isset($_POST['manage_category']))
{
    header("Location:add_category.php");
}

function fetch_category()
{
    $sql = "SELECT p.cat_id, p.created_cat_at, c.p_category, i.image
    FROM category p JOIN parent_category c ON p.cat_id = c.parent_cat_id
    JOIN blog_post i ON p.cat_id = i.post_id";

    $result = mysqli_query($GLOBALS['conn'], $sql) ;
    while($row = mysqli_fetch_assoc($result))
    {
        
        echo "<tr>";
        echo "<td>$row[cat_id]</td>";
        echo "<td>$row[image]</td>";
        echo "<td>$row[p_category]</td>";
        echo "<td>$row[created_cat_at]</td>";
        $buttonId = $row['cat_id'];
        echo "<td><input type = 'submit' name = 'edit[$buttonId]' value = 'edit'>
             <input type = 'submit' name = 'delete[$buttonId]' value = 'delete'></td> ";
        echo "</tr>";
    }
}

function edit($id, $tb_name)
{
    $now = date("h:m:s || d/m/Y",time());
    $sql = "UPDATE $tb_name SET created_cat_at = '$now' WHERE cat_id = '$id'";
    echo $sql1 = "UPDATE parent_category SET p_category = 'education' WHERE parent_cat_id = '$id'";
    mysqli_query($GLOBALS['conn'], $sql);
    mysqli_query($GLOBALS['conn'], $sql1);
}

if(isset($_GET['edit']))
{
    $id = array_search('edit', $_GET['edit']);
    echo "$id";
    edit($id, 'category');
    
}
?>