<?php
//echo "hello";

require "../core/practice.php";

$router = new Router();

$router ->add_route('',['controller' => 'Home', 'action' => 'index']);
$url = $_SERVER['QUERY_STRING'];

if($router->match($url))
{
    print_r($router->get_param());
}
else{
    echo "URL not find";
}


?>