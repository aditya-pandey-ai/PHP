<?php

class Song {
    private $title;
    private $artist;
    private $genre;
    private $tempo;

    // Constructor to initialize the Song object
    public function __construct($title, $artist, $genre, $tempo) {
        $this->title = $title;
        $this->artist = $artist;
        $this->genre = $genre;
        $this->tempo = $tempo;
    }

    // Getter for the title property
    public function getTitle() {
        return $this->title;
    }

    // Setter for the title property
    public function setTitle($title) {
        $this->title = $title;
    }

    // Getter for the artist property
    public function getArtist() {
        return $this->artist;
    }

    // Setter for the artist property
    public function setArtist($artist) {
        $this->artist = $artist;
    }

    // Getter for the genre property
    public function getGenre() {
        return $this->genre;
    }

    // Setter for the genre property
    public function setGenre($genre) {
        $this->genre = $genre;
    }

    // Getter for the tempo property
    public function getTempo() {
        return $this->tempo;
    }

    // Setter for the tempo property
    public function setTempo($tempo) {
        $this->tempo = $tempo;
    }
}

?>
