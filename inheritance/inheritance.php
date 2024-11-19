<?php

require_once 'PhysicalBook.php';
require_once 'DigitalBook.php';

$book = new Book('The Da Vinci Code', 'Dan Brown', 7000);

echo $book->print() . '<br>';

$physicalBook = new PhysicalBook('Angels and Demons', 'Dan Brown', 6000, 300);
$digitalBook = new DigitalBook('Harry Potter and the Philosopher\'s Stone', 'J. K Rowling', 5000, 1000);

echo $physicalBook->print() . '<br>';
echo $digitalBook->print() . '<br>';