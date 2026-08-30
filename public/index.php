<?php

use Core\Router;

const BASE_PATH = __DIR__.'/../';
require_once BASE_PATH.'vendor/autoload.php';
require BASE_PATH.'functions.php';

$router = new Router();
require base_path("Core/routes.php");

$url = parse_url($_SERVER['REQUEST_URI'])['path'];
$method = $_POST['_method']??$_SERVER['REQUEST_METHOD'];

$router->load($url,$method);