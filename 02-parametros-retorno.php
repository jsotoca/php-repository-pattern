<?php
    declare(strict_types = 1);
    define("IGV",0.18);

    function discount(float $price, float &$discount) : void {
        $discount = $price * IGV;
    }

    $price = 1000;
    $discount = 0;
    discount($price, $discount);
    print sprintf("El descuento es: %.2f",$discount);