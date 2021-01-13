<?php
    declare(strict_types = 1);

    class MobileDeviceNew {
        
        private $brand;
        private $model;
        private $color;

        function __construct(string $brand, string $model, string $color){
            $this->brand = $brand;
            $this->model = $model;
            $this->color = $color;
        }

        function turnOn() : void{
            echo "$this->model esta encendiendo...\n";
        }

        function makeACall(string $phoneNumber) : void{
            echo "Llamando al $phoneNumber...";
        }

    }


    $obj = new MobileDeviceNew("Xiaomi","Redmi 9","Black");
    var_dump($obj);
    $obj->turnOn();
    $obj->makeACall("922924500");