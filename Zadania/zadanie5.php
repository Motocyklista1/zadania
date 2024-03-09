<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$tablica = [];

for ($i = 0; $i < 50; $i++) {
    $tablica[] = rand(1, 100);
}

echo "Liczby, których indeks jest kwadratem liczby całkowitej:<br>";
foreach ($tablica as $indeks => $liczba) {
    if (sqrt($indeks) == floor(sqrt($indeks))) {
        echo "Indeks: $indeks, Wartość: $liczba<br>";
    }
}
?>
</body>
</html>