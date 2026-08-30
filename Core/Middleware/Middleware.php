<?php
namespace Core\Middleware;
use Exception;
class Middleware
{
    const MAP = [
        'guest'=>Guest::class,
        'auth'=>Auth::class,
        'admin'=>Admin::class,
    ];


    public static function run($role){
        if(!array_key_exists($role,self::MAP)){
        throw new \ErrorException("Error not valid role of user");
        }
        $middleware = self::MAP[$role];
        (new $middleware())->handle();
    }

}