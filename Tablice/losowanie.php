<!DOCTYPE html>
<html>
<head>
    <title>Tablica</title>
</head>
<body>

<?php
$wektor = range(1, 20);
$tablica = array_combine($wektor, array_map(function() { return rand(1, 100); }, $wektor));

function zmienKolejnosc(&$tablica, $stareIndex, $nowyIndex) {
    if (array_key_exists($stareIndex, $tablica)) {
        $element = $tablica[$stareIndex];
        unset($tablica[$stareIndex]);
        array_splice($tablica, $nowyIndex, 0, [$stareIndex => $element]);
    }
}

zmienKolejnosc($tablica, 5, 15);

echo '<ul>';
foreach ($tablica as $index => $value) {
    echo '<li>' . $index . ': ' . $value . '</li>';
}
echo '</ul>';
?>

</body>
</html>
