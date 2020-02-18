<?php

// require_once dirname(__DIR__) . '/vendor/twig/twig/lib/Twig/Autoloader.php';
// Twig_Autoloader::register();
require '../vendor/autoload.php';
Twig_Autoloader::register();
error_reporting(E_ALL);
set_error_handler('Core\Error::errorHandler');
set_exception_handler('Core\Error::exceptionHendler');
// spl_autoload_register(function ($class)
// {
//     $root = dirname(__DIR__);
//     $file = $root . '/' . str_replace('\\', '/', $class) . '.php'; 
//     if(is_readable($file))
//     {
//         require $root . '/' . str_replace('\\', '/', $class) . '.php';
//     }
// });

$router = new Core\Router();

$router ->add('',['controller' => 'Home', 'action' => 'index']);
$router ->add('posts',['controller' => 'Posts', 'action' => 'index']);
$router -> add('{controller}/{action}');
$router -> add('{controller}/{id:\d+}/{action}');
$router -> add('admin/{controller}/{action}', ['namespace' => 'Admin']);
$url = $_SERVER['QUERY_STRING'];

/*
echo '<pre>';
echo htmlspecialchars(print_r($router->getRoutes(),true));
echo '</pre>';


if($router->match($url))
{
    echo '<pre>';
    var_dump($router->getParam());
    echo '</pre>';
}
else
{
    echo "No route found for URL '$url'";
}
*/

$router ->dispatch($url);
?>