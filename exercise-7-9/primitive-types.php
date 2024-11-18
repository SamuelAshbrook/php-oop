<?php

// This prevents invalid types from being passed to the constructor
declare(strict_types=1);

require_once 'Song.php';

$song = new Song('The Chain', 10000000);

var_dump($song);