<?php

declare(strict_types = 1);

require '../vendor/autoload.php';

$root = dirname(__DIR__).DIRECTORY_SEPARATOR;
define('VIEWS_PATH', $root.'views'.DIRECTORY_SEPARATOR);

$router = new \App\Router();
$router ->get('/', [App\Controllers\HomeController::class, 'index'])
        ->get('/oiseau', [App\Controllers\HomeController::class, 'oiseau'])
        ->get('/poisson', [App\Controllers\HomeController::class, 'poisson'])
        ->get('/bonus', [App\Controllers\HomeController::class, 'calculate'])
        ->post('/bonus', [App\Controllers\HomeController::class, 'calculate']);
        
echo $router->resolve($_SERVER['REQUEST_URI'], strtolower($_SERVER['REQUEST_METHOD']));


