<?php

namespace App\Controllers\User;

use \Core\View;
//use \App\Models\Post;

class page extends \Core\Controller
{
    public function indexAction()
    {
        View::renderTemplate('page1.html');
        if(isset($_POST['login_btn']))
        {
            header('Location:/mvc/public/User/Login/login');
        }
        if(isset($_POST['registration']))
        {
            header('Location:/mvc/public/User/Registration/register');
        }
    }

}

?>