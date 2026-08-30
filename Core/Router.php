<?php

namespace Core;

use Core\Middleware\Middleware;

class Router
{
protected $routes= [];
private  function add($url,$controller,$method){
    $this->routes[] = [
        'url' => $url,
        'controller' => $controller,
        'method' => $method,
        'middleware' => null
    ];
    return $this;
}
public function only($role)
{
    $this->routes[array_key_last($this->routes)]['middleware'] = $role;
    return $this;
}

public function get($url,$controller){
    return $this->add($url,$controller,'GET');
}
public function post($url,$controller,$method){
    return $this->add($url,$controller,'POST');
}
public function put($url,$controller,$method){
    return $this->add($url,$controller,'PUT');
}
public function delete($url,$controller,$method){
    return $this->add($url,$controller,'DELETE');
}


public function load($url,$method){
    foreach ($this->routes as $route){
        if($route['url'] == $url && $route['method'] == $method){
            if($route['middleware']){
                Middleware::run($route['middleware']);
            }

            return require base_path('Http/controllers/'.$route['controller'].'.php');
        }
    }
    abort();
}





}