<?php

declare(strict_types = 1);

namespace App\Models;

class Calculatrice {

    public function __construct(protected int $number, protected int $receiver)
    {     
    }

    // GETTERS AND SETTERS
    /**
     * Get the value of number
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set the value of number
     */
    public function setNumber($number): self
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get the value of receiver
     */
    public function getReceiver()
    {
        return $this->receiver;
    }

    /**
     * Set the value of receiver
     */
    public function setReceiver($receiver): self
    {
        $this->receiver = $receiver;

        return $this;
    }


    // OTHER METHODS
    public function add($number, $receiver): int
    {
        $result = $number + $receiver;
        return $result;
    }
    public function multiply($number, $receiver): int
    {
        $result = $number * $receiver;
        return $result;
    }
    public function divide($number, $receiver): int
    {
    
        $result = $number / $receiver;
        return $result;
    }
    public function substract($number, $receiver): int
    {

        $result = $number - $receiver;
        return $result;
    }


    
}