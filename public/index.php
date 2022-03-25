<?php

declare(strict_types=1);

spl_autoload_register(function ($class) {
    $class = str_replace('\\', '/', $class);
    $path = '../'.str_replace('App', 'src', $class).'.php';

    if (file_exists($path)) {
        require $path;
    }
});

$router = new App\Router();
$router->register('/', function () { include '../views/home.php'; });
$router->resolve($_SERVER['REQUEST_URI']);

