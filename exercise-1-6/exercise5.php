<?php

// This example introduces constructors

class Product
{

    public $name;
    public $price;

    public function __construct($name = "iPhone", $price = 1000)
    {
        $this->name = $name;
        $this->price = $price;
    }

    public function priceAsCurrency($divisor = 1, $currencySymbol = '£')
    {
        $priceAsCurrency = $this->price / $divisor;
        return $currencySymbol . $priceAsCurrency;
    }

}

$iPhone8 = new Product(price: 500);
print $iPhone8->name . PHP_EOL;
print $iPhone8->priceAsCurrency() . PHP_EOL;

$product = new Product('soap', 100);

print $product->name . PHP_EOL;
print $product->priceAsCurrency() . PHP_EOL;