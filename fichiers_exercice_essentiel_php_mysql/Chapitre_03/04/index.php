<?php 

class Product {

    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

}

$product = new Product('name1');
echo $product->getName();
$product->setName('name2');
echo $product->getName();