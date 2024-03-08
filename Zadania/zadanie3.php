<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $tablica = [];

        for ($i = 0; $i < 50; $i++) {
            $tablica[] = rand(1, 50);
        }

        $parzyste = 0; 
        echo "wylosowane liczby: ";
        foreach ($tablica as $liczba) {
            echo $liczba . " ";
            if ($liczba % 2 == 0) {
                $parzyste++;
            }
        }

        echo "<br>";
        echo "ilość liczb parzystych: " . $parzyste; 

    ?>
</body>
</html>