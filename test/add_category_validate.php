<?php
include "database.php";
function getvalue($fieldname )
{
    return isset($_POST[$fieldname]) 
        ? $_POST[$fieldname] 
        : " " ;
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
        break;
    }
    }
    return $arr_acc ;
}

$category = filter_category($_POST);
print_r($category);

store_data('category', $category);
function store_data($tb_name,$arr)
{
   
    if(isset($_POST['add_category_btn']))
    {
        $time = time();
        $now = date('D/M/Y || H:i:s ', $time);
        $key = array_keys($arr);
        array_push($key,'created_cat_at');
        $val = array_values($arr);
        array_push($val,$now);
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