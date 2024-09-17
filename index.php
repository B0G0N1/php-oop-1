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

$movie1 = new Movie("Inception", 2010, ["Sci-Fi", "Action"]);
$movie2 = new Movie("The Matrix", 1999, ["Sci-Fi", "Adventure"]);

echo $movie1->getInfo() . "<br>";
echo $movie2->getInfo() . "<br>";
?>
