<?php

declare(strict_types = 1);

namespace App\Models;

class Calculatrice {

    public function add(float $number, float $receiver): float
    {
        return $number + $receiver;
        
    }
    public function multiply(float $number, float $receiver): float
    {
        return $number * $receiver;
        
    }
    public function divide(float $number, float $receiver): float
    {
        return $number / $receiver;
        
    }
    public function substract(float $number, float $receiver): float
    {
        return $number - $receiver;
        
    }
    public function median(float $number, float $receiver): float
    {
        return round(($number + $receiver) / 2);
        
    }
    


    
}