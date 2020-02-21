<?php

namespace App\Controllers\User;

use \Core\View;
use \App\Models\Post;

class Registration extends \Core\Controller
{
    public function registerAction()
    {
        View::renderTemplate('registration.html');
        if(isset($_POST['register']))
        {
            $user = Registration::prepareData();
            $add = Registration::addressData();
            $id = Post::addData('users',$user);
            $add['user_id'] = $id;
            Registration::addAddress($add);
        
        }

    }

    public function addAddress($add)
    {
        $lid = Post::addData('user_address',$add);
        
        header('Location:/mvc/public/User/Login/login');

    }

    public function addressData()
    {
        $data = $_POST;
        $user = [];
        foreach($data as $key => $val)
        {
            switch($key)
            {
                case 'street':
                    $user[$key] = $val;
                break;
                case 'city':
                    $user[$key] =$val;
                break;
                case 'zip_code':
                    $user[$key] =$val;
                break;
                case 'state':
                    $user[$key] =$val;
                break;
                case 'country':
                    $user[$key] =$val;
                break;
                default:
                    break;
            }
        }
        return $user;
    }

    public function prepareData()
    {
        $data = $_POST;
        $user = [];
        foreach($data as $key => $val)
        {
            switch($key)
            {
                case 'first_name':
                    $user[$key] = $val;
                break;
                case 'last_name':
                    $user[$key] =$val;
                break;
                case 'email':
                    $user[$key] =$val;
                break;
                case 'password':
                    $user[$key] =$val;
                break;
                case 'phone_number':
                    $user[$key] =$val;
                break;
                default:
                    break;
            }
        }
        return $user;
    }

}

?>