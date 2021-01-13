<?php 
    declare(strict_types = 1);

    abstract class Product {

        protected $name;
        protected $price;

        protected function calculateDiscount(float $discount) : float {
            return $this->price * $discount;
        }

    }

    class Book extends Product {
        private $releaseDate;

        public function __construct(string $name, float $price, $releaseDate){
            $this->name = $name;            
            $this->price = $price;            
            $this->releaseDate = $releaseDate;            
        }

        public function getDiscount() : float {
            return $this->calculateDiscount(0.2);
        }
    }

    class Guitar extends Product {
        private $type;

        public function __construct(string $name, float $price, $type){
            $this->name = $name;            
            $this->price = $price;            
            $this->type = $type;            
        }

        public function getDiscount() : float {
            return $this->calculateDiscount(0.5);
        }
    }

    class PC {

    }

    echo "\n\n";

    $obj = new Book('el principito',12.00,'18/07/1987');
    var_dump($obj);
    echo $obj->getDiscount();

    echo "\n\n";

    $obj2 = new Guitar('Bender',142.00,'Eléctrica');
    var_dump($obj2);
    echo $obj2->getDiscount();

    echo "\n\n";

    $obj3 = new PC();

    function getObjectName(Product $product) : string {
        return gettype($product);
    }

    echo "\n\n";

    var_dump(getObjectName($obj));
    var_dump(getObjectName($obj2));
    // var_dump(getObjectName($obj3));