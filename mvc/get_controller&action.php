<?php

class Router
{
    protected $route_arr = array();
    protected $route_param = array();
    public function add_route($route, $value)
    {
        $this->route_arr[$route] = $value ;
    }
    public function get_param()
    {
        return $this->route_param;
    }

    public function match($url)
    {
        $param = [];
        $reg_exp = "/^(?P<controller>[a-z-]+)\/(?P<action>[a-z-]+)$/i";
        if(preg_match($reg_exp,$url,$matches))
        {
            foreach($matches as $key => $val)
            {
                if(is_string($key))
                {
                    $param[$key] =$val; 
                }
            }
            $this ->route_param = $param;
            return TRUE;
        }
    }
}



?>