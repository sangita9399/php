<?php
namespace Core;
class Router
{
    protected $routes = [];
    protected $params = [];

    public function add($route, $params = [])
    {
        $route = preg_replace("/\//",'\\/',$route) ;
        $route = preg_replace("/\{([a-z]+)\}/", '(?P<\1>[a-z-]+)', $route);
        $route = preg_replace('/\{([ya-z]+):([^\}]+)\}/','(?P<\1>\2)',$route);
        $route = "/^" . $route . "$/i";
        
        $this->routes[$route] = $params;

    }

    public function match($url)
    {
        // foreach($this->routes as $route => $params)
        // {
        //     if($url==$route)
        //     {
        //         $this->params = $params;
        //         return true;
        //     }
        // }
        // return false;

       // $reg_exp = "/^(?P<controller>[a-z-]+)\/(?P<action>[a-z-]+)$/";
        foreach($this->routes as $route => $params){
        if(preg_match($route, $url, $matches))
        {
           // $params = [];
            foreach($matches as $key => $match)
            {
                if(is_string($key))
                {
                    $params[$key] = $match;
                }
            }
            $this ->params= $params;
            return true;
        }
        }
        return false;
    }

    public function getRoutes()
    {
        return $this->routes;
    }

    public function getParam()
    {
        return $this->params;
    }

    
    public function dispatch($url)
    {
        $url = $this ->removeQueryString($url);
        if($this->match($url))
        {
            $controller = $this ->params['controller'];
            $controller = $this->convertClass($controller);
            $controller = $this->getNamespace() . $controller;
           // $controller = "App\Controllers\\$controller";
            if(class_exists($controller))
            {
                $obj = new $controller($this->params);
                $action = $this ->params['action'];
                $action = $this ->convertMethod($action);

                if(is_callable([$obj, $action]))
                {
                    $obj->$action();
                }
                else{
                    echo "Method $action is not found";
                }
            }
            else{
                echo "Class $controller is not found";
            }
        }
        else{
            echo " no route method.";
        }

    }

    public function convertClass($str)
    {
        return str_replace(' ', '', ucwords(str_replace('-', '', $str)));
    }

    public function convertMethod($str)
    {
        return lcfirst($this->convertClass($str));
    }

    protected function removeQueryString($url)
    {
        if($url != '')
        {
            $parts = explode('&',$url,2);
            if(strpos($parts[0], '=') === FALSE)
            {
                $url = $parts[0];
            }
            else{
                $url = '';
            }
        }
        return $url;
    }

    protected function getNamespace()
    {
        $namespace = 'App\Controllers\\';

        if(array_key_exists('namespace',$this->params))
        {
            $namespace .= $this ->params['namespace'] . '\\';
        }
        return $namespace;
    }
    
}

?>