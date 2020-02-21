<?php

require '../vendor/autoload.php';
Twig_Autoloader::register();
set_error_handler('Core\Error::errorHandler');
set_exception_handler('Core\Error::exceptionHendler');


$router = new Core\Router();

$router->add('User/{controller}/{action}',['namespace'=>'User']);
$router->add('Admin/{controller}/{action}',['namespace'=>'Admin']);
$url = $_SERVER['QUERY_STRING'];

$router->dispatch($url);


?>