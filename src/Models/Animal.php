<?php

declare(strict_types=1);

namespace App\Models;

abstract class Animal 
{
    public function __construct(protected string $race, protected string $nom, protected string $moyenDeLocomotion)
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
        return "My name is $this->nom and i'm part of the $this->race race";
    }

    public function flee(): string
    {
        return "$this->moyenDeLocomotion away";
    }

    abstract public function eat();
}