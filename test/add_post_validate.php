<?php
include "database.php";
session_start();
function getvalue($fieldname )
{
    return isset($_POST[$fieldname]) 
        ? $_POST[$fieldname] 
        : " " ;
}



function filter_account($arr)
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
        case 'published_at':
            $arr_acc[$value] = $arr[$value];
        break;
        default:
        break;
    }
    }
    return $arr_acc ;
}

function store_data($tb_name,$arr)
{
    if(isset($_POST['submit_post']))
    {
        $now = date('D/M/Y || H:i:s ', time());
        $key = array_keys($arr);
        array_push($key,'created_post_at');
        array_push($key, 'user_id');
        $val = array_values($arr);
        array_push($val,$now);
        array_push($val, $_SESSION['u_id']);
        print_r($val);
         echo   $sql = "INSERT INTO $tb_name (" . implode(',', $key) . ")" . 
                    "VALUES('" . implode("','", $val).  "')";
        echo $GLOBALS['lastid1'] = mysqli_query($GLOBALS['conn'], $sql) 
            ? mysqli_insert_id($GLOBALS['conn']) 
            : "error";
    }
}

function fetch_category($tb_name,$fieldname)
{
    $sql =  "SELECT $fieldname FROM $tb_name";
    $result  = mysqli_query($GLOBALS['conn'], $sql);
    while($row = mysqli_fetch_assoc($result))
    {
        $selected = "selected='selected'";
        echo "<option value = $row[p_category] (in_array($row[p_category],(getvalue('category',[]))))
             ? $selected: ''> $row[p_category]"; 
        echo "</option>";
    }
}

$arr = filter_account($_POST);

echo "<pre>";
//print_r($_POST);

print_r($arr);
echo "</pre>";

store_data('blog_post',$arr);
//echo $lastid1;
   
       
?>