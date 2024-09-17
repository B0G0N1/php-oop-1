<?php
// Definizione della classe Movie
class Movie {
    public $title;
    public $year;
    public $genres;

    // Costruttore per inizializzare gli attributi
    public function __construct($title, $year, $genres = []) {
        $this->title = $title;
        $this->year = $year;
        $this->genres = $genres;
    }

    // Metodo per restituire le informazioni del film
    public function getInfo() {
        $genresList = implode(", ", $this->genres);
        return "{$this->title} ({$this->year}) - Generi: {$genresList}";
    }
}
?>