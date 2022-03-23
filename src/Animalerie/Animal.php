<?php

declare(strict_types=1);

namespace App\Animalerie;

abstract class Animal 
{
    public function __construct(private string $race, private string $nom, private string $moyenDeLocomotion)
    {

    }

    // GETTERS/SETTERS RACE
    public function getRace()
    {
        return $this->race;
    }
    public function setRace($race): self
    {
        $this->race = $race;

        return $this;
    }

    // GETTERS/SETTERS NOM
    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    // GETTERS/SETTERS MOYEN DE LOCOMOTION
    public function getMoyenDeLocomotion()
    {
        return $this->moyenDeLocomotion;
    }
    public function setMoyenDeLocomotion($moyenDeLocomotion): self
    {
        $this->moyenDeLocomotion = $moyenDeLocomotion;

        return $this;
    }

    public function identify(): string
    {
        return "Cet animal est un {$this->getNom()}, de la race {$this->getRace()}";
    }

    public function flee(): string
    {
        return "Il utilise {$this->getMoyenDeLocomotion()} pour s'enfuir";
    }

}