<?php

// This example introduces creating a class and instantiating an object

class Product 
{

    // Properties
    public $name;
    public $price;

}

$product = new Product();

// Change the value of the properties
$iphone = $product->price = 1000 . "\n";

// Display the value of the price property
echo $iphone;

?>