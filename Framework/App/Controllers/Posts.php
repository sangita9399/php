<?php
namespace App\Controllers;
use \Core\View;
use App\Models\Post;
class Posts extends \Core\Controller
{
    public function indexAction()
    {
        // echo "hi! welcome to the index action of Posts Controller";
        // echo "<p>Query String:<pre>" . htmlspecialchars(print_r($_GET,true)) . '</pre>' ;
        $posts = Post::getAll();
        View::renderTemplate('Posts/index.html', ['posts' => $posts]); 
    }
    public function addNewAction()
    {
        echo "hi! welcome to the add-new action of Posts Controller";
    }
    public function editAction()
    {
        echo "hi! welcome to the edit action of Posts Controller";
        echo '<p>Route Parameters:<pre> '. 
              htmlspecialchars(print_r($this->route_params,true)) . '</pre>';
    }
}

?>