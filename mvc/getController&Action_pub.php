<?php

require "../core/get_controller&action.php";

$router = new Router();

$router ->add_route('',['controller' => 'Home', 'action' => 'index']);
$router ->add_route('',['controller' => 'Post', 'action' => 'new']);
$url = $_SERVER['QUERY_STRING'];
echo $url;
if($router->match($url))
{
    print_r($router->get_param());
}
else{
    echo "URL not find";
}


?>