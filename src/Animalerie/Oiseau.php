<?php

declare(strict_types=1);

namespace App\Animalerie;

class Oiseau extends Animal
{
    private string $moyenDeLocomotion;
    public function eat(string $food): string
    {
        return "L'animal se nourrit essentiellement de {$this->food}";
    }
}
$gypaeteBarbu = new Oiseau("Gypaetus barbatus", "Gypaète Barbu", "vol");
$kakapo = new Oiseau("Strigops habroptila", "Kakapo", "vol");
