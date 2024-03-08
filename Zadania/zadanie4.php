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

        for ($i = 0; $i < 80; $i++) {
            $tablica[] = rand(1, 100);
        }

        $licz = 0;
        $suma = 0;

        echo "Liczby należące do przedziału 10-50: ";
        foreach ($tablica as $liczba) {
            if ($liczba >= 10 && $liczba <= 50) {
                echo $liczba . " ";
                $suma += $liczba;
                $licz++;
            }
        }

        if ($licz > 0) {
            $srednia = $suma / $licz;
            echo "<br>";
            echo "Średnia wynosi: " . $srednia;
        } 
        else {
            echo "br";
            echo "Brak liczb w przedziale 1-50.";
        }
    ?>
</body>
</html>