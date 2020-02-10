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
        foreach($this->route_arr as $route => $param)
        {
            if($url == $route)
            {
                $this -> route_param= $param;
                return TRUE;
            }
        }
        return FALSE;
    }
}



?>