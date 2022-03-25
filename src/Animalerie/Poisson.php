<?php

declare(strict_types=1);

namespace App\Animalerie;

class Poisson extends Animal
{
    private string $moyenDeLocomotion = "nage";
    public function eat(): string
    {
        return "L'animal se nourrit essentiellement de larves et d'algues";
    }
}

$poissonRouge = new Poisson ("Carassius auratus", "Poisson Rouge", "nage");
$carpeKoi = new Poisson ("Carpe Koï", "Carpe Koï", "nage");