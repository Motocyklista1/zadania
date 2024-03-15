<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadanie 9</title>
</head>
<body>
<?php

$tablica = [];

for ($i = 0; $i < 10; $i++) {
    $tablica[] = rand(1, 100);
}

$arytmetyczny = true;
$roznica = $tablica[1] - $tablica[0];
for ($i = 2; $i < count($tablica); $i++) {
    if ($tablica[$i] - $tablica[$i - 1] != $roznica) {
        $arytmetyczny = false;
        break;
    }
}

$naprzemienny = true;
for ($i = 0; $i < count($tablica) - 2; $i += 2) {
    if ($tablica[$i + 2] - $tablica[$i] != $roznica) {
        $naprzemienny = false;
        break;
    }
}

if ($arytmetyczny) {
    echo "Liczby tworzą ciąg arytmetyczny.\n";
} elseif ($naprzemienny) {
    echo "Liczby tworzą ciąg naprzemienny.\n";
} else {
    echo "Liczby nie tworzą zadnego ciagu\n";
}

?>
</body>
</html>