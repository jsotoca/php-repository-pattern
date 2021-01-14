<?php
    declare(strict_types = 1);
    namespace jsotoca\helpers;

    class IvaHelper {

        const IVA = 0.18;

        static function calculateIva(float $price) : float {
            return $price * self::IVA;
        }

    }