<?php
    declare(strict_types = 1);
    
    function saludar(string $mensaje) : string{
        return  "$mensaje \n";
    }

    function tuEdad(int $edad) : int {
        return ((int) date('Y')) - $edad;
    }

    function discount(float $price, float &$discount) : void {
        $discount = $price*0.18;
    }
    
    echo saludar("Bienvenido Juan Antonio Soto cabrera");
    echo tuEdad(1987). "\n";
    $discount = 0.0;
    discount(100,$discount);
    echo $discount . "\n";
?>