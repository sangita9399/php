<?php
session_start();

function getvalue($section,$fieldname, $returntype= "")
{
    return  $returntype = isset($_POST[$section][$fieldname]) 
    ? $_POST[$section][$fieldname] 
    : get_session($section, $fieldname, $returntype);
}

function set_session($section)
{
    
    $error_msg =[];
    if(isset($_POST[$section]))
    {
    foreach($_POST[$section] as $key => $value)
    {
        if(validate($key,$value) == FALSE)
        {
            echo "Invalid $key field<br>";
            array_push($error_msg,$key);
        }        
    }
    if(empty($error_msg))
    {
        return isset($_POST[$section]) 
                ? ($_SESSION[$section] = $_POST[$section]) 
                : [];
    }
    }
}
function get_session($section, $fieldname, $returntype= "")
{
    return isset($_SESSION[$section][$fieldname]) 
    ? $_SESSION[$section][$fieldname] 
    : $returntype;
}

function validate($key,$value)
{
    switch($key)
    {
        case 'fname':
        case 'lname':
        case 'city':
        case 'state':
        case 'detail':
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


echo "<pre>";
print_r($_POST);
if(isset($_POST['account']))
{
    print_r(set_session("account"));
}
if(isset($_POST["address"]))
{
    print_r(set_session("address"));
}
if(isset($_POST['other']))
{
    print_r(set_session("other"));
}

// print_r($_SESSION);
echo "</pre> ";

?>