<?php
    declare(strict_types = 1);

    class MobileDevice {

        public $brand;
        public $model;
        public $color;

        function turnOn(){
            echo "$this->brand ha sido encendido \n";
        }

        function makeCall(string $phoneNumber){
            echo "Marcando al $phoneNumber ...\n";
        }

    }

    $obj = new MobileDevice();
    $obj->brand = 'XIAMI';
    $obj->model = 'Redmi note 9';
    $obj->color = 'blue';

    var_dump($obj);
    
    $obj->turnOn();
    $obj->makeCall('922924500');