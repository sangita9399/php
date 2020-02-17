<?php

namespace App\Controllers;

class Home extends \Core\Controller
{
    public function index()
    {
       echo "hi! welcome to the index action in Home controller";
       echo "<p>Query String:" . htmlspecialchars(print_r($_GET,true)) ;
    }
    public function addNew()
    {
        echo "hi! welcome to the add-new action in Home Controller";
    }

}


?>