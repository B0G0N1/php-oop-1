<?php
class Movie {
    public $title;
    public $year;

    public function __construct($title, $year) {
        $this->title = $title;
        $this->year = $year;
    }

    public function getInfo() {
        return "{$this->title} ({$this->year})";
    }
}

$movie1 = new Movie("Inception", 2010);
$movie2 = new Movie("The Matrix", 1999);

echo $movie1->getInfo() . "<br>";
echo $movie2->getInfo() . "<br>";
?>
