<?php
require_once __DIR__ . '/db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies List</title>
</head>
<body>

<h1>Movies List</h1>

<?php
foreach ($movies as $movie) {
    echo $movie->getInfo() . "<br>";
}
?>

</body>
</html>