<?php
class Movie {
    public $title;
    public $year;
    public $genres;

    public function __construct($title, $year, $genres = []) {
        $this->title = $title;
        $this->year = $year;
        $this->genres = $genres;
    }

    public function getInfo() {
        $genresList = implode(", ", $this->genres);
        return "{$this->title} ({$this->year}) - Generi: {$genresList}";
    }
}
?>