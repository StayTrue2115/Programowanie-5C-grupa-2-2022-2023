<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>obliczanie pierwiastka kwadratowego </title>
</head>
<body>
    <?php
     $liczba = 8;
     if($liczba >= 0 ) {
        $pierwiastek = sqrt($liczba);
        echo "Pierwiastek kwadratowy z $liczba wynosi: $pierwiastek";
     } else {
        echo "Nie można obliczyć pierwiastka z liczby ujemnej."
     }
     ?>
</body>
</html>