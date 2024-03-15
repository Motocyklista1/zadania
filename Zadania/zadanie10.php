<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 10</title>
</head>
<body>
<?php
$tablica = [];

for ($i = 0; $i < 50; $i++) {
    $tablica[] = rand(1, 100);
}

$unikalne = array_unique($liczby);

rsort($unikalne);

if (count($unikalne) < 2) {
    echo "Nie można znaleźć drugiego co do wielkości wyrazu ciągu. Za mało różnych liczb zostało podanych.\n";
} else {
    $druganajwieksza = $unikalne[1];
    echo "Drugi co do wielkości wyraz ciągu to: $druganajwieksza\n";
}

?>
</body>
</html>