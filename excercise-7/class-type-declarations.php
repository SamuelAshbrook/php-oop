<?php

require_once 'Song.php';
require_once 'Playlist.php';

$playlist = new Playlist();

$song1 = new Song('The Chain', 1210633686);
$song2 = new Song('Dreams', 1857103372);

$playlist->addSong($song1);
$playlist->addSong($song2);

foreach ( $playlist->songs as $song ) {

    echo $song->name . ' has ' . $song->numberOfPlays . ' plays' . PHP_EOL . '<br>';

}