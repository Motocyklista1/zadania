<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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

for ($i = 0; $i < 10; $i++) {
    $tablica[] = rand(1, 100);
}

echo "Zawartość tablicy: " . implode(", ", $tablica) . "\n";

$suma = 0;
foreach ($tablica as $liczba) {
    if ($liczba % 4 == 2 || $liczba <= 0) {
        $suma += $liczba ** 2;
    }
}

echo "Suma kwadratów elementów spełniających warunek: " . $suma . "\n";

?>
</body>
</html>

</body>
</html>