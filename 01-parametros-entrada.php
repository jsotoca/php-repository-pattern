<?php
    declare(strict_types = 1);
    
    function saludar(string $mensaje){
        echo "$mensaje \n";
    }

    function tuEdad(int $edad){
        print ((int) date('Y')) - $edad . "\n";
    }
    
    saludar("Bienvenido Juan Antonio Soto cabrera");
    tuEdad(1987);
?>