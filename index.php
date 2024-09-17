<?php
// Inclusione del database con i film
require_once __DIR__ . '/db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-1</title>
</head>
<body>

<h1>Movies List</h1>

<!-- Ciclo per stampare la lista dei film -->
<?php
foreach ($movies as $movie) {
    echo $movie->getInfo() . "<br>";
}
?>

</body>
</html>