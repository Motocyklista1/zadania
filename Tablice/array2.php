<!DOCTYPE html>
<html>
<head>
    <title>Tablica</title>
    <style>
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            padding: 10px;
            margin-bottom: 5px;
            border-radius: 5px;
            box-shadow: 2px 2px 5px rgba(0, 0, 0, 0.1);
        }
        li:nth-child(even) {
            background-color: #f0f0f0;
        }
        li:nth-child(odd) {
            background-color: #e0e0e0;
        }
    </style>
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
