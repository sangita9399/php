<?php
namespace App\Controllers;
class Posts extends \Core\Controller
{
    public function index()
    {
        echo "hi! welcome to the index action of Posts Controller";
        echo "<p>Query String:<pre>" . htmlspecialchars(print_r($_GET,true)) . '</pre>' ;
    }
    public function addNew()
    {
        echo "hi! welcome to the add-new action of Posts Controller";
    }
    public function edit()
    {
        echo "hi! welcome to the edit action of Posts Controller";
        echo '<p>Route Parameters:<pre> '. 
              htmlspecialchars(print_r($this->route_params,true)) . '</pre>';
    }
}

?>