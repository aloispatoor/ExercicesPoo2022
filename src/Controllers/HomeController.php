<?php

declare(strict_types=1);

namespace App\Controllers;
use App\Models\Poisson;
use App\Models\Oiseau;
use App\Models\Calculatrice;

class HomeController
{
    public function index()
    {
        return (new \App\View('home', []))->render();
    }

    public function form(): string
    {
        $form = $_POST;

        return (new \App\View('bonus', ['form' => $form]))->render();
    }

    public function oiseau()
    {
        $eagle = new Oiseau('Eagle', 'notUSA');
        $albatros = new Oiseau('Albatros', 'CAW');
        $pigeon = new Oiseau('Pigeon', 'Stupid');
        include '../views/oiseau.php';
        return (new \App\View('oiseau', ['eagle' => $eagle, 'albatros' => $albatros, 'pigeon' => $pigeon]))->render();
    }
    public function poisson()
    {
        $guppito = new Poisson('Guppy', 'Guppito');
        $redFish = new Poisson('Poisson Rouge', 'LPPSR');
        $shark = new Poisson('Requin', 'NomNom');
        include '../views/poisson.php';
        return (new \App\View('poisson', ['guppito' => $guppito, 'redFish' => $redFish, 'shark' => $shark]))->render();
    }

    public function calculate()
    {
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            if(in_array('', $_POST)){
                return header("Location:/bonus");
            }
            $operator = htmlspecialchars(trim($_POST['operator']));
            $number = (float) htmlspecialchars(trim($_POST['number1']));
            $receiver = (float) htmlspecialchars(trim($_POST['number2']));

            $calculator = new Calculatrice();
            $result = match ($operator) {
                'add' => $calculator->add($number, $receiver),
                'multiply' => $calculator->multiply($number, $receiver),
                'divide' => $calculator->divide($number, $receiver),
                'substract' => $calculator->substract($number, $receiver),
                'median' => $calculator->median($number, $receiver),
            };
        
        }
        include '../views/bonus.php';
        return (new \App\View('bonus', []))->render();
    }

    public function processed()
    {
        echo '<pre>';
        print_r($_POST);
        echo '</pre>';

        return header('Location:/');
    }
}