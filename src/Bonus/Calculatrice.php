<?php

declare(strict_types = 1);

namespace App\Bonus;
use App\Controller\HomeController;

class Calculatrice {

    public function __construct(private int $number, private int $receiver)
    {     
    }

    public function add(int $number): int
    {
        $result = $number + $receiver;
        return $result;
    }
    public function multiply(int $number): int
    {
        $result = $number * $receiver;
        return $result;
    }
    public function divide(int $number): int
    {
    
        $result = $number / $receiver;
        return $result;
    }
    public function substract(int $number): int
    {

        $result = $number - $receiver;
        return $result;
    }
    public function median(int $number): int
    {
        
        $result = $number + $receiver;
        return $result;
    }

}