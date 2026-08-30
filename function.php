<?php

function dd($value){
    echo '<pre>';
    var_dump($value);
    echo '</pre>';

    die();
}

function base_path($path){
    return BASE_PATH.$path;
}
function view($view, $data=[]){
    extract($data);
    return require base_path('/views/'.$view.'.php');
}

function abort($code = 404){
    view("$code");
}
function redirect($url){
    header("Location: $url");
    exit;
}
function isUrl($url){
    return parse_url($_SERVER['REQUEST_URI'])['path'] == $url;
}