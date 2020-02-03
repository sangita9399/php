<?php
include "database.php";
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
        case 'category':
            $arr_acc[$value] = $arr[$value];
        break;
        case 'content':
            $arr_acc[$value] = $arr[$value];
        break;
        case 'publish_at':
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
        $time = time();
        $now = date('D/M/Y || H:i:s ', $time);
        $key = array_keys($arr);
        array_push($key,'created_at');
        $val = array_values($arr);
        array_push($val,$now);
         echo   $sql = "INSERT INTO $tb_name (" . implode(',', $key) . ")" . 
                    "VALUES('" . implode("','", $val).  "')";
        return $GLOBALS['lastid1'] = mysqli_query($GLOBALS['conn'], $sql) 
            ? mysqli_insert_id($GLOBALS['conn']) 
            : FALSE;
    }

}

//$arr = filter_account($_POST);

echo "<pre>";
print_r($_POST);

//print_r($arr);
echo "</pre>";

//$lastid1 = store_data('blog_post',$arr);
//echo $lastid1;
   
       
?>