<?php

require "../core/get_controller&action.php";

$router = new Router();

$router ->add_route('',['controller' => 'Home', 'action' => 'index']);
$router ->add_route('post',['controller' => 'Post', 'action' => 'index']);
$router ->add_route("{controller}/{action}");
$router -> add_route('admin/{action}/{controller}');
$url = $_SERVER['QUERY_STRING'];
//echo $url;
echo "<pre>";
var_dump($router->get_param());
echo htmlspecialchars(print_r($router->get_param()),TRUE);
echo "</pre>";

?>