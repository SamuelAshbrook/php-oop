<?php

class Playlist 
{

    public $songs = [];

    // Declare a return type of void (no return value)
    public function addSong($song): void
    {
        $this->songs[] = $song;
    }

    // Declare a return type of int
    public function getLength() : int
    {
        return count($this->songs);
    }

}