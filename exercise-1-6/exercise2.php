<?php

// This example introduces class properties

class Product 
{

    // Properties
    public $name;
    public $price; // pence

    public function priceAsCurrency()
    {
        $priceAsCurrency = $this->price / 100;
        return $priceAsCurrency;
    }

}

$potato = new Product();
$potato->name = "Potato";
$potato->price = 550;

$beans = new Product();
$beans->name = "Beans";
$beans->price = 700;

$priceAsCurrency = $potato->priceAsCurrency();

var_dump($priceAsCurrency . PHP_EOL);

?>