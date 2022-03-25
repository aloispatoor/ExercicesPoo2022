<?php

declare(strict_types=1);

class Calculatrice {
    // private int $number = $_POST['number1'];
    // private int $receiver = $_POST['number2'];
    public function __construct(private int $number, private int $receiver)
    {
        
    }
    public function add(int $number)
    {
        $number = $_POST['number1'];
        $receiver = $_POST['number2'];
        $result = $number + $receiver;
        return $result;
    }
    public function multiply(int $number)
    {
        $number = $_POST['number1'];
        $receiver = $_POST['number2'];
        $result = $number * $receiver;
        return $result;
    }
    public function divide(int $number)
    {
        $number = $_POST['number1'];
        $receiver = $_POST['number2'];
        $result = $number / $receiver;
        return $result;
    }
    public function substract(int $number)
    {
        $number = $_POST['number1'];
        $receiver = $_POST['number2'];
        $result = $number - $receiver;
        return $result;
    }
    public function median(int $number)
    {
        $number = $_POST['number1'];
        $receiver = $_POST['number2'];
        $result = $number + $receiver;
        return $result;
    }

}