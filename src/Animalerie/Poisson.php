<?php

declare(strict_types=1);

namespace App\Animalerie;

class Poisson extends Animal
{
    private string $moyenDeLocomotion;
    public function eat(string $food): string
    {
        return "L'animal se nourrit essentiellement de {$this->food}";
    }
}