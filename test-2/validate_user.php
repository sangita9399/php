<?php

include "database.php";


function getData($fieldname )
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
        case "prefix":
            $arr_acc[$value] = $arr[$value];
        break;
        case "fname":
            $arr_acc[$value] = $arr[$value];
        break;
        case 'lname':
            $arr_acc[$value] = $arr[$value];
        break;
        case 'information':
            $arr_acc[$value] = $arr[$value];
        break;
        case 'email':
            $arr_acc[$value] = $arr[$value];
        break;
        case 'mobile':
            $arr_acc[$value] = $arr[$value];
        break;
        case 'password':
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
    $error_msg =[];
    if(isset($_POST))
    {
        echo "hi";
        foreach($_POST as $key => $value)
        {
            if(validate($key,$value) == FALSE)
            {
                echo "Invalid $key field<br>";
                array_push($error_msg,$key);
            }        
        }
        if(empty($error_msg))
        {
           $time = time();
           $now = date('D/M/Y || H:i:s ', $time);
            $key = array_keys($arr);
            array_push($key,'created_at');
            $val = array_values($arr);
            array_push($val,$now);
             $sql = "INSERT INTO $tb_name (" . implode(',', $key) . ")" . 
                        "VALUES('" . implode("','", $val).  "')";
            return $GLOBALS['lastid'] = mysqli_query($GLOBALS['conn'], $sql) 
                ? mysqli_insert_id($GLOBALS['conn']) 
                : FALSE;
            
        }
    }
}

$arr = filter_account($_POST);

echo "<pre>";
print_r($_POST);

print_r($arr);
echo "</pre>";
$lastid = store_data('registration',$arr);
echo $lastid;
   
       if(isset($_POST['submit']))
       {
           header('Location:login.php');
       }
    



function validate($key,$value)
{
    switch($key)
    {
    case 'fname':
    case 'lname':
    case 'city':
    case 'state':
        return (preg_match('/^[a-zA-Z]+$/',$value)) ? TRUE  : FALSE;
    break;
    case 'email':
        return (preg_match("(^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$)i"
        , $value)) ? TRUE : FALSE;
    break;
    case "phone":
        return (preg_match('/^[0-9]{10}+$/', $value)) ? TRUE : FALSE;
    break;
    case "pin_code":
        return (preg_match('/^[0-9]{6}+$/', $value)) ? TRUE : FALSE;
    break;
    default:
        return 1;
}              
}
?>