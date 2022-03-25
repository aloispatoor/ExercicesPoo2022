<?php

declare(strict_types=1);

namespace App\Animalerie;

class Oiseau extends Animal
{
    private string $moyenDeLocomotion = "vol";
    public function eat(): string
    {
        return "L'animal se nourrit essentiellement de graines et de vers";
    }
}
$gypaeteBarbu = new Oiseau("Gypaetus barbatus", "Gypaète Barbu", "vol");
$kakapo = new Oiseau("Strigops habroptila", "Kakapo", "vol");
