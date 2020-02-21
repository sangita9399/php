<?php

namespace App\Controllers\User;

use \Core\View;
use \App\Models\Post;

class Dashboard extends \Core\Controller
{
   
    public function showAction()
    {
        $data =['service_id', 'title','licence_number', 'vehicle_number', 'date',
                'timeslot', 'vehicle_issue', 'service_center'] ;
        $data = Post::getAll('service_registration',$data);
        View::renderTemplate('dashboard.html',['data'=>$data]);
    }
}
?>