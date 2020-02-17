<?php


spl_autoload_register(function ($class)
{
    $root = dirname(__DIR__);
    $file = $root . '/' . str_replace('\\', '/', $class) . '.php'; 
    if(is_readable($file))
    {
        require $root . '/' . str_replace('\\', '/', $class) . '.php';
    }
});

$router = new Core\Router();

$router ->add('',['controller' => 'Home', 'action' => 'index']);
$router ->add('posts',['controller' => 'Posts', 'action' => 'index']);
$router -> add('{controller}/{action}');
$router -> add('{controller}/{id:\d+}/{action}');
//$router -> add('admin/{action}/{controller}');
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