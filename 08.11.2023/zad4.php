<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>porównanie zmiennych</title>
</head>
<body>
    <?php
    $a = 10;
    $b = 5;
    if ($a < $b){
        echo "zmienna \$a jest mniejsza od zmiennej \$b.";
    } 
    elseif ($a == $b){
        echo "zmienna \$a jest równa zmiennej \$b";
    }
    else ($a > $b){
        echo "zmienna \$a jest większa od zmiennej \$b";
    }
    ?>
</body>
</html>