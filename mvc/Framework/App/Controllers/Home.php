<?php

namespace App\Controllers;
use \Core\View;
class Home extends \Core\Controller
{
    public function indexAction()
    {
    //    echo "hi! welcome to the index action in Home controller";
    //    echo "<p>Query String:" . htmlspecialchars(print_r($_GET,true)) ;
        View::render('Home/index.php');

    }
    public function addNewAction()
    {
        echo "hi! welcome to the add-new action in Home Controller";
    }
    protected function before()
    {
        echo "(before)  ";
    }
    protected function after()
    {
        echo "  (after)";
    }

}


?>