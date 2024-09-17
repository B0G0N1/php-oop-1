<?php
// Inclusione del file Movie
require_once __DIR__ . '/Models/Movie.php';

// Array di oggetti Movie
$movies = [
    new Movie("Inception", 2010, ["Sci-Fi", "Action"]),
    new Movie("The Matrix", 1999, ["Sci-Fi", "Adventure"]),
];
?>