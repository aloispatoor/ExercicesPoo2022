<?php

declare(strict_types = 1);
use App\Animalerie\Oiseau;
use App\Animalerie\Poisson;
use App\Bonus\Calculatrice;

spl_autoload_register(function ($class) {
    $class = str_replace('\\', '/', $class);
    $path = '../'.str_replace('App', 'src', $class).'.php';

    if (file_exists($path)) {
        require $path;
    }
});

$router = new App\Router();
$router->register('/', function () { include '../views/home.php'; })
    ->register('/oiseau', function () {
    $eagle = new Oiseau('Eagle', 'notUSA');
    $albatros = new Oiseau('Albatros', 'CAW');
    $pigeon = new Oiseau('Pigeon', 'Stupid');
    include '../views/oiseau.php';
})
    ->register('/poisson', function () {
    $guppito = new Poisson('Guppy', 'Guppito');
    $redFish = new Poisson('Poisson Rouge', 'LPPSR');
    $shark = new Poisson('Requin', 'NomNom');
    include '../views/poisson.php';
})
    ->register('/bonus', function (){
    include '../views/bonus.php';
});
$router->resolve($_SERVER['REQUEST_URI']);


