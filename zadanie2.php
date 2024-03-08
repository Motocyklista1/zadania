<!DOCTYPE html>
<html lang="ppl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function rng() {
            return rand(1, 500);
        }

        $tablica = [];
        for ($i = 0; $i < 10; $i++) {
            return rand(1, 500);
        }
            echo "Wylosowane liczby: ";
            foreach ($tablica as $liczba) {
                echo $liczba . " ";
            }
            echo "<br>";

            echo "liczby parzyste i podzielne przez 3: ";
            foreach ($tablica as $liczba) {
                if ($liczba % 2 == 0 && $liczba % 3 == 0) {
                    echo $liczba . " ";
                }
            }
    ?>
</body>
</html>