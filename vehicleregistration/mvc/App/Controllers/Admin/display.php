<?php

namespace App\Controllers\Admin;

use \Core\View;
use \App\Models\Post;

class display extends \Core\Controller
{
    public function showAction()
    {
        $data = ['service_id', 'title','licence_number', 'vehicle_number', 'date',
                    'timeslot', 'vehicle_issue', 'service_center','status'] ;
        $arr = Post::getAll('service_registration', $data);
       // print_r($arr);
        View::renderTemplate('display.html',['data' =>$arr]);
    }

    public function edit()
    {
        if(isset($_GET['id']))
        {
            $id = $_GET['id'];
            $data = ['service_id', 'title','licence_number', 'vehicle_number', 'date',
            'timeslot', 'vehicle_issue', 'service_center','status'] ;
            $result = Post::fetchRow('service_registration', $data, $id);
            View::renderTemplate('edit_form.html', ['data'=>$result]);
            if(isset($_POST['submit']))
            {
                $data = [];
                $data = display::preapareData();
                
                Post::editData('service_registration', $data, $id);
                header('Location:/mvc/public/Admin/display/show');
            }
        }

    }
    public function delete()
    {
        if(isset($_GET['did']))
        {
            $delete_id = $_GET['did'];
            Post::deleteData('service_registration', $delete_id);
            header('Location:/mvc/public/Admin/display/show');
        }
    }

    public function preapareData()
    {
        $data =$_POST;
        $user =[];

        foreach($data as $key => $val)
        {
            switch($key)
            {
                case 'title':
                    $user[$key] = $val;
                break;
                case 'vehicle_number':
                    $user[$key] =$val;
                break;
                case 'licence_number':
                    $user[$key] =$val;
                break;
                case 'date':
                    $user[$key] =$val;
                break;
                case 'timeslot':
                    $user[$key] =$val;
                break;
                case 'vehicle_issue':
                    $user[$key] =$val;
                break;
                case 'service_center':
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