<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $tablica = [2, 4, 6, 8, 10, 12, 14, 16];

        $suma = array_sum($tablica);
        $licz = count($tablica);
        $srednia = $suma / $licz;

        if ($srednia > 5) {
            echo "Średnia jest większa niż 5";
        }
        elseif ($srednia < 5) {
            echo "Średnia jest mniejsza niż 5";
        }
        else {
            echo "Średnia jest równa 5";
        }
    ?>
</body>
</html>

