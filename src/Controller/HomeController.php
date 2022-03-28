<?php

declare(strict_types=1);

namespace App\Controller;

class HomeController{

    public function numberPost(){

        if(!empty($_POST['number1'] || !empty($_POST['number2']))){
    
            $number = $_POST['number1'];
            $receiver = $_POST['number2'];
        }
    }
}