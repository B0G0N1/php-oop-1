<?php
class Movie {
    public $title;
    public $year;

    public function __construct($title, $year) {
        $this->title = $title;
        $this->year = $year;
    }
}

$movie1 = new Movie("Inception", 2010);
$movie2 = new Movie("The Matrix", 1999);

echo $movie1->title . " (" . $movie1->year . ")<br>";
echo $movie2->title . " (" . $movie2->year . ")<br>";
?>