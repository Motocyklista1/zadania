<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

function odzera($n) {
    $tablica = [];
    for ($i = 0; $i < $n; $i++) {
        $tablica[] = $i;
    }
    return $tablica;
}

function od7($n) {
    $tablica = [];
    for ($i = 7; $i < $n + 7; $i++) {
        $tablica[] = $i;
    }
    return $tablica;
}

function tablicax4($n) {
    $tablica = [];
    for ($i = 1; $i <= $n; $i++) {
        $tablica[] = $i * 4;
    }
    return $tablica;
}

function potega2($n) {
    $tablica = [];
    for ($i = 0; $i < $n; $i++) {
        $tablica[] = pow(2, $i);
    }
    return $tablica;
}

function od2($n) {
    $tablica = [];
    for ($i = 2; $i <= $n + 1; $i++) {
        $tablica[] = $i;
    }
    return $tablica;
}

$n = 40;
echo "a) Od 0 do n-1: " . implode(", ", odzera($n)) . "<br>";
echo "b) Od 7 do n+6: " . implode(", ", od7($n)) . "<br>";
echo "c) Ciąg 4, 8, 12, 16,...: " . implode(", ", tablicax4($n)) . "<br>";
echo "d) Ciąg 1, 2, 4, 8, 16,...: " . implode(", ", potega2($n)) . "<br>";
echo "e) 2, 3, 4,...,n+1: " . implode(", ", od2($n)) . "<br>";

?>
</body>
</html>
