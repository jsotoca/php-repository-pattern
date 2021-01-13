<?php
    declare(strict_types = 1);

    class PriceHelper {

        const DISCOUNT = 0.2;
        const IVA  = 0.18;

        public static function getDiscount(float $price) : float {
            return $price * self::DISCOUNT;
        }

        public static function getIVA(float $price) : float {
            return $price * self::IVA;
        }

    }

    echo PriceHelper::IVA ." - " .  PriceHelper::getDiscount(100) . "\n";
    echo PriceHelper::getIVA(100);