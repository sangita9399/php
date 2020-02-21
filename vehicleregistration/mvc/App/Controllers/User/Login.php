<?php

namespace App\Controllers\User;

use \Core\View;
use \App\Models\Post;
//session_start();
class Login extends \Core\Controller
{
    public function loginAction()
    {
        View::renderTemplate('login.html');
        if(isset($_POST['login']))
        {
            print_r($_POST);
            echo "<br>";
            Login::prepareData();
            $arr = ['email','password','user_id'];
            $result =Post::getAll('users',$arr);
           // print_r($result);
           $flag =0;
            for($i=0; $i<count($result);$i++)
            {
                if($_POST['email']==$result[$i]['email'] && 
                    $_POST['password'] == $result[$i]['password'])
                {
                    $_SESSION['u_id'] = $result[$i]['user_id'];
                    print_r($_SESSION);
                    $flag = 1;
                    header("Location:/mvc/public/User/Dashboard/show");
                    break;
                }
           
        }
        if($flag ==0)
        {
            echo "Invalid email or password";
        }
        }
    }

    public function prepareData()
    {
        $data = $_POST;
    }
}

?>