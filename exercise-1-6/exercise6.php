<?php 

// This example works in the same way as exercise5.php, but it uses the new PHP 8.0 feature of named arguments.

class Product
{

    public function __construct(public $name = 'iPhone', public $price = 100)
    {
        
    }

    public function priceAsCurrency($divisor = 1, $currencySymbol = '£')
    {
        $priceAsCurrency = $this->price / $divisor;
        return $currencySymbol . $priceAsCurrency;
    }

}

$product = new Product( price: 200 );
print $product->name . PHP_EOL;
print $product->priceAsCurrency() . PHP_EOL;