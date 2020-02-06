<?php
include "database.php";
session_start();
function getvalue($fieldname )
{
    if(isset($_SESSION['update_cat_id']) && !empty($_SESSION['update_cat_id']))
    {
        $sql = "SELECT * FROM category where cat_id = '$_SESSION[update_cat_id]'";
        $result = mysqli_query($GLOBALS['conn'], $sql);
        $rows = mysqli_fetch_assoc($result);
        $arr = filter_category($rows);
        edit_data("category", $arr, "'cat_id'= '$_SESSION[update_cat_id]'");
    }
    else
    {
        return isset($_POST[$fieldname]) 
            ? $_POST[$fieldname] 
            : " " ;
    }
}

function filter_category($arr)
{
    $arr_acc = array();
    $key = array_keys($arr);
    foreach($key as  $value)
    {
        switch($value)
        {
        case "title":
            $arr_acc[$value] = $arr[$value];
        break;
        case "url":
            $arr_acc[$value] = $arr[$value];
        break;
        case 'content':
            $arr_acc[$value] = $arr[$value];
        break;
        case 'meta_title':
            $arr_acc[$value] = $arr[$value];
        break;
        default:
                $time = time();
                $now = date('D/M/Y || H:i:s ', $time);
                array_merge($arr_acc, array('created_at' =>$now));
        break;
    }
    }
    return $arr_acc ;
}
if(isset($_POST['add_category_btn']) && !isset($_SESSION['update_cat_id']))
{
    $category = filter_category($_POST);
    store_data('category', $category);

}

function store_data($tb_name,$arr)
{
   
    if(isset($_POST['add_category_btn']))
    {
       
        $key = array_keys($arr);
        $val = array_values($arr);
        echo "<br>";
        $sql1 = "SELECT parent_cat_id FROM parent_category WHERE p_category = '$_POST[p_category]'";
        $result = mysqli_query($GLOBALS['conn'],$sql1)          ;
      
        $row = mysqli_fetch_array($result);                  
        array_push($key, 'parent_cat_id');
        array_push($val,$row['parent_cat_id']);
        $sql = "INSERT INTO $tb_name (" . implode(',', $key) . ")" . 
                "VALUES('" . implode("','", $val).  "')";
       
        
         $GLOBALS['lastid_cat'] = mysqli_query($GLOBALS['conn'], $sql) 
            ? mysqli_insert_id($GLOBALS['conn']) 
            : FALSE;
   
          
    }
}
?>