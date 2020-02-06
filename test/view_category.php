<?php
session_start();
include "database.php";
if(isset($_POST['add_category']))
{
    unset($_SESSION['edit_id']);
    header("Location:add_post.php");
}

if(isset($_POST['my_profile']))
{
    $sql = "SELECT * FROM registration WHERE r_id = '$_SESSION[u_id]'";
    $result = mysqli_query($GLOBALS['conn'],$sql);
    echo "";
   
    $row = mysqli_fetch_assoc($result);
    echo "<table><tr><td>Prefix</td><td><select><option>$row[prefix]</option></select></td></tr>";
    echo "<tr><td>First Name:</td><td><input type = 'text' value = '$row[fname]'></td></tr>";
    echo "<tr><td>Last Name:</td><td><input type ='text' value = '$row[lname]'></td></tr> ";
    echo "<tr><td>Mobile Number:</td><td><input type = 'text' value = '$row[mobile]'></td></tr>";
    echo "<tr><td>Email:</td><td><input type =  'text' value = '$row[email]'></td></tr>";
    echo "<tr><td>Password:</td><td><input type = 'text' value = '$row[password]'></td></tr>";
    echo "<tr><td>Information:</td><td><textarea rows= '2' cols = '25' value = '$row[information]'></textarea></td></tr>";
    echo "</table>";
}

if(isset($_POST['manage_category']))
{
    header("Location:add_category.php");
}

if(isset($_POST['logout']))
{
    session_destroy();
    header('Location:login.php');
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
        $buttonId = $row['post_id'];
        echo "<td><input type = 'submit' name = 'edit[$buttonId]' value = 'edit'>
        <input type = 'submit' name = 'delete[$buttonId]' value = 'delete'></td> ";
        echo "</tr>";
    }
}

if(isset($_GET['delete']))
{
    $id = array_search('delete', $_GET['delete']);
    echo $id;
    delete_post("blog_post",$id);
}

if(isset($_GET['edit']))
{
    $_SESSION['edit_id'] = array_search('edit', $_GET['edit']);
    
    header("Location: add_post.php");
}



?>