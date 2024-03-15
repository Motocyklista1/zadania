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

for ($i = 0; $i < 30; $i++) {
    $tablica[] = rand(50, 100);
}

echo "Oryginalna tablica: " . implode(", ", $tablica) . "<br>";

foreach ($tablica as $klucz => $wartosc) {
    if ($klucz % 2 == 0) {
        $tablica[$klucz] = 0;
    }
}

echo "Nowa tablica po wyzerowaniu liczb na parzystych miejscach: " . implode(", ", $tablica) . "<br>";

?>
</body>
</html>
