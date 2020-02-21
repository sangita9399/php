<?php

namespace App\Controllers\User;

use \Core\View;
use \App\Models\Post;
class Service extends \Core\Controller
{
    public function registrationAction()
    {
        $arr = [];
        for($i=1;$i<24;$i++)
        {
            $j=$i+1;
            $s="$i-$j";
            $arr[$i] = $s; 
        }
        View::renderTemplate('vehicle_registration.html',['arr'=>$arr]);
        if(isset($_POST['submit']))
        {
           // print_r($_POST);
           // print_r($_SESSION);
            $data = Service::preapareData();
           // $data['user_id'] = $_SESSION['u_id'];
            $data['created_date'] =date('d/m/Y', time());
            $val = Service::validate($data);
            if($val==1)
            {
                $id= Post::addData('service_registration', $data);
                echo "$id";
            }
            else{
                echo "already exits licence or vehicle number";
            }
        }
    }

    public function validate($data)
    {
        $arr1 =['licence_number', 'vehicle_number', 'user_id'];
        $arr = Post::getAll('service_registration', $arr1);
        $flag =0;
        for($i=0; $i<count($arr);$i++)
        {
            if($data['licence_number']==$arr[$i]['licence_number'] || 
                $data['vehicle_number'] == $arr[$i]['vehicle_number'])
            {
                // $_SESSION['u_id'] = $arr[$i]['user_id'];
                // print_r($_SESSION);
                $flag =1;
            }
        }
            if($flag ==1)
            {
                return FALSE;
            }
            else{
                return TRUE;
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