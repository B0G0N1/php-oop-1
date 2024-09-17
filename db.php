<?php
require_once __DIR__ . '/Models/movie.php';

$movies = [
    new Movie("Inception", 2010, ["Sci-Fi", "Action"]),
    new Movie("The Matrix", 1999, ["Sci-Fi", "Adventure"]),
];
?>