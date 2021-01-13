<?php
    declare(strict_types = 1);

    class Product {

        private $name;
        private $price;

        public function __construct(string $name, float $price){
            $this->name = $name;
            $this->price = $price;
        }

        public function getName() : string {
            return $this->name;
        }

        public function getPrice() : float {
            return $this->price;
        }

        public function setName(string $name) : void {
            $this->name = $name;
        }

        public function setPrice(float $price) : void {
            $this->price = $price;
        }

    }

    $obj = new Product("Guitarra Acustica", 150);
    var_dump($obj);
    $obj->setName("Guitarra Electrica");
    $obj->setPrice(200);
    var_dump($obj);
    $name = $obj->getName();
    $price = $obj->getPrice();
    echo "\nProducto: $name - $price";