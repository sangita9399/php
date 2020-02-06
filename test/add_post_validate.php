<?php
include "database.php";

session_start();
function getvalues($fieldname )
{
    if(isset($_SESSION['edit_id']) && !empty($_SESSION['edit_id']))
    {
        $sql = "SELECT * FROM blog_post where post_id = '$_SESSION[edit_id]'";
        $result = mysqli_query($GLOBALS['conn'], $sql);
        $rows = mysqli_fetch_assoc($result);
        $arr = filter_account($rows);
        edit_data("blog_post",$_SESSION['edit_id'],$arr,"'post_id'= '$_SESSION[post_id]'");
    }
    else
    {
        return isset($_POST[$fieldname]) 
            ? $_POST[$fieldname] 
            : " " ;
    }
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
        case 'image':
            if(empty($_FILES['name']['image'])) {    
                return "Select a image file";
            }
            else {
                $uploadOrNot = (uploadImg(array('image/jpeg','image/jpg'),'Image'));
                if($uploadOrNot !== 1) {
                    return $uploadOrNot;
                }
                else {
                    return "1";
                }
            }
        break;
        case 'blog_category':
            $arr_acc[$value] = implode(',',$arr[$value]);

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
        echo "<br>";
        $now = date('D/M/Y || H:i:s ', time());
        $key = array_keys($arr);
        array_push($key,'created_post_at');
        array_push($key, 'user_id');
        $val = array_values($arr);
        array_push($val,$now);
        array_push($val, $_SESSION['u_id']);
        print_r($val);
        echo  $sql = "INSERT INTO $tb_name (" . implode(',', $key) . ")" . 
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
        echo "<option value = $row[p_category] 
             (in_array($row[p_category],(getvalue('blog_category',[]))))
             ? $selected: ''> $row[p_category]"; 
        echo "</option>";
    }
}

function uploadImg($definedType, $fileInput) {
    $cnt = 0;
    echo $fileName = $_FILES['name'][$fileInput];
    $tmp_name = $_FILES['tmp_name'][$fileInput];
    $location = "uploads/";
    $type = $_FILES['type'][$fileInput];
    foreach($definedType as $defineType) {
        if($type == $defineType) {
            $cnt = 1;
        }
    }
    if ($cnt == 1) {
        if(!file_exists($location . $fileName)) {
            move_uploaded_file($tmp_name, $location . $fileName); 
            return 1;       
        }
        else {
            return 'File already Exists';  
        }
    }
    else {
        $type = '';
        foreach($definedType as $defineType)
            $type .= "File should be ".$defineType;
        return $type;
    }
}

if(isset($_POST['add_category_btn']) && !isset($_SESSION['edit_id']))
{
    $arr = filter_account($_POST);
    store_data('blog_post',$arr);
}
   
       
?>