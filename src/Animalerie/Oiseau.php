<?php

declare(strict_types=1);

namespace App\Animalerie;

class Oiseau extends Animal
{
    public function eat(string $food): string
    {
        return "L'animal se nourrit essentiellement de {$this->food}";
    }
}