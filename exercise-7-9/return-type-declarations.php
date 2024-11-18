<?php

require_once 'Song.php';
require_once 'Playlist.php';

$playlist = new Playlist();

$song1 = new Song('The Chain', 1210633686);
$song2 = new Song('Dreams', 1857103372);

$playlist->addSong($song1);
$playlist->addSong($song2);

if ( $playlist->getLength() < 5 ) {
    echo 'Playlist is too short!' . PHP_EOL;
}